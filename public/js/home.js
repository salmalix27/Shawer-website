 

/* ---------- 1) Navbar mobile menu ---------- */
(() => {
  const burger = document.getElementById("burger");
  const menu = document.getElementById("menu");

  if (!burger || !menu) return;

  burger.addEventListener("click", () => {
    menu.classList.toggle("is-open");
  });
})();

/* ---------- 2) Progress animation (hero) ---------- */
(() => {
  const bar = document.getElementById("progressBar");
  if (!bar) return;

  const widths = [35, 62, 92];
  let i = 0;

  setInterval(() => {
    i = (i + 1) % widths.length;
    bar.style.width = widths[i] + "%";
  }, 2500);
})();

/* ---------- 3) Products slider: auto + arrows + mobile swipe ---------- */
(() => {
  const slider = document.getElementById("prodSlider");
  const track = document.getElementById("prodTrack");
  const prev = document.getElementById("prodPrev");
  const next = document.getElementById("prodNext");

  if (!slider || !track) return;

  const cards = Array.from(track.children);
  let index = 0;

  let timer = null;
  let resumeTimeout = null;
  const INTERVAL = 2600;

  function isMobile() {
    return window.matchMedia("(max-width: 640px)").matches;
  }

  function cardsPerView() {
    const w = window.innerWidth;
    if (w <= 640) return 1;
    if (w <= 980) return 2;
    return 3;
  }

  function stepSize() {
    const first = cards[0];
    if (!first) return slider.clientWidth;

    const styles = getComputedStyle(track);
    const gap = parseFloat(styles.gap || styles.columnGap || "0") || 0;

    return first.getBoundingClientRect().width + gap;
  }

  function maxIndex() {
    return Math.max(0, cards.length - cardsPerView());
  }

  function updateDesktop() {
    index = Math.min(Math.max(index, 0), maxIndex());
    track.style.transform = `translateX(-${stepSize() * index}px)`;
  }

  function goNext() {
    if (isMobile()) {
      slider.scrollBy({ left: stepSize(), behavior: "smooth" });

      const nearEnd =
        slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 8;
      if (nearEnd)
        setTimeout(() => slider.scrollTo({ left: 0, behavior: "smooth" }), 450);
      return;
    }

    index = index >= maxIndex() ? 0 : index + 1;
    updateDesktop();
  }

  function goPrev() {
    if (isMobile()) {
      slider.scrollBy({ left: -stepSize(), behavior: "smooth" });
      return;
    }

    index = index <= 0 ? maxIndex() : index - 1;
    updateDesktop();
  }

  function startAuto() {
    stopAuto();
    timer = setInterval(goNext, INTERVAL);
  }

  function stopAuto() {
    if (timer) clearInterval(timer);
    timer = null;

    if (resumeTimeout) clearTimeout(resumeTimeout);
    resumeTimeout = null;
  }

  function pauseAndResume() {
    stopAuto();
    resumeTimeout = setTimeout(startAuto, 1400);
  }

  if (prev) prev.addEventListener("click", () => { pauseAndResume(); goPrev(); });
  if (next) next.addEventListener("click", () => { pauseAndResume(); goNext(); });

  slider.addEventListener("mouseenter", stopAuto);
  slider.addEventListener("mouseleave", startAuto);

  slider.addEventListener("touchstart", stopAuto, { passive: true });
  slider.addEventListener(
    "touchend",
    () => {
      resumeTimeout = setTimeout(startAuto, 1200);
    },
    { passive: true }
  );

  slider.addEventListener(
    "scroll",
    () => {
      if (isMobile()) pauseAndResume();
    },
    { passive: true }
  );

  window.addEventListener("resize", () => {
    stopAuto();
    index = 0;
    slider.scrollTo({ left: 0, behavior: "auto" });
    if (!isMobile()) updateDesktop();
    startAuto();
  });

  if (!isMobile()) updateDesktop();
  startAuto();
})();

/* ---------- 4) About reveal animation ---------- */
(() => {
  const aboutSection = document.querySelector(".about");
  if (!aboutSection) return;

  function revealAbout() {
    const top = aboutSection.getBoundingClientRect().top;
    if (top < window.innerHeight - 100) {
      aboutSection.classList.add("visible");
    }
  }

  window.addEventListener("scroll", revealAbout);
  revealAbout();
})();

/* ---------- 5) Automotive Categories: reveal + hover + click ---------- */
(() => {
  const cards = document.querySelectorAll(".autoCard");
  if (!cards.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("showCard");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.2 }
  );

  cards.forEach((card) => {
    observer.observe(card);

    card.addEventListener("mouseenter", () => card.classList.add("is-hover"));
    card.addEventListener("mouseleave", () => {
      card.classList.remove("is-hover");
      card.classList.remove("is-pressed");
    });

    card.addEventListener("mousedown", () => card.classList.add("is-pressed"));
    card.addEventListener("mouseup", () => card.classList.remove("is-pressed"));
    card.addEventListener("blur", () => card.classList.remove("is-pressed"));
  });
})();

/* ---------- 6) Car loan calculator (Brand New Cars page) ---------- */
(() => {
  function formatMoney(n) {
    const num = Number(n);
    if (!isFinite(num)) return "0.00";
    return num.toLocaleString("en-US", {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2,
    });
  }

function toNumber(id) {
  const el = document.getElementById(id);
  return Number(String(el?.value || "0").replace(/[^\d]/g, ""));
}

  const btn = document.getElementById("calcBtn");
  if (!btn) return;

  btn.addEventListener("click", () => {
    const MAX_PRICE = 6000000;

    let price = Math.max(toNumber("carPrice"), 0);
    if (price > MAX_PRICE) {
      price = MAX_PRICE;
      const el = document.getElementById("carPrice");
      if (el) el.value = String(MAX_PRICE);
    }

    const down = Math.max(toNumber("downPayment"), 0);
    const MAX_YEARS = 10;

let years = Math.max(toNumber("years"), 0);
if (years > MAX_YEARS) {
  years = MAX_YEARS;
  const yEl = document.getElementById("years");
  if (yEl) yEl.value = String(MAX_YEARS);
}
    const annualRate = toNumber("interest"); // disabled input still has value

    const principal = Math.max(price - down, 0);

    const monthlyEl = document.getElementById("monthly");
    const loanAmountEl = document.getElementById("loanAmount");
    const totalInterestEl = document.getElementById("totalInterest");
    if (!monthlyEl || !loanAmountEl || !totalInterestEl) return;

    if (price <= 0 || years <= 0) {
      monthlyEl.textContent = "0.00";
      loanAmountEl.textContent = "0.00";
      totalInterestEl.textContent = "0.00";
      return;
    }

    // Flat interest calculation
    const totalInterest = principal * (annualRate / 100) * years;
    const totalPayable = principal + totalInterest;
    const months = years * 12;
    const monthlyPayment = totalPayable / months;

    monthlyEl.textContent = formatMoney(monthlyPayment);
    loanAmountEl.textContent = formatMoney(principal);
    totalInterestEl.textContent = formatMoney(totalInterest);
  });
})();

/* ---------- Contact form: show sub product only for Automotive ---------- */
(() => {
  const product = document.getElementById("c_product");
  const autoSubWrap = document.getElementById("autoSubWrap");
  const autoSub = document.getElementById("c_auto_sub");

  const carBrandWrap = document.getElementById("carBrandWrap");
  const carModelWrap = document.getElementById("carModelWrap");
  const carCommentWrap = document.getElementById("carCommentWrap");

  const carBrand = document.getElementById("c_car_brand");
  const carModel = document.getElementById("c_car_model");
  const carComment = document.getElementById("c_car_comment");

  if (!product || !autoSubWrap || !autoSub) return;

  function hideExtraFields() {
    carBrandWrap.style.display = "none";
    carModelWrap.style.display = "none";
    carCommentWrap.style.display = "none";

    carBrand.required = false;
    carModel.required = false;
    carComment.required = false;

    carBrand.value = "";
    carModel.value = "";
    carComment.value = "";
  }

  function hideSubProduct() {
    autoSubWrap.style.display = "none";
    autoSub.required = false;
    autoSub.value = "";
    hideExtraFields();
  }

  function showSubProduct() {
    autoSubWrap.style.display = "";
    autoSub.required = true;
  }

  function updateExtraFields() {
    hideExtraFields();

    const sub = autoSub.value || "";

    if (sub === "Brand New Cars" || sub === "Used Cars" || sub === "Vans") {
      carBrandWrap.style.display = "";
      carModelWrap.style.display = "";

      carBrand.required = true;
      carModel.required = true;
      return;
    }

    if (sub === "Transportation") {
      carBrandWrap.style.display = "";
      carCommentWrap.style.display = "";

      carBrand.required = true;
      carComment.required = true;
    }
  }

  function updateForm() {
    const selectedProduct = product.value || "";

    if (selectedProduct === "Automotive") {
      showSubProduct();
      updateExtraFields();
    } else {
      hideSubProduct();
    }
  }

  product.addEventListener("change", updateForm);
  autoSub.addEventListener("change", updateExtraFields);

  // on load
  hideSubProduct();
  updateForm();
})();

/* ---------- 8) Cars page: accordion + dropdowns + brand autocomplete + card slider ---------- */
(() => {
  const filterCard = document.querySelector(".cfsFilterCard");
  if (!filterCard) return;

  const norm = (s) =>
    (s || "")
      .toString()
      .trim()
      .toLowerCase()
      .replace(/[-_]/g, " ")
      .replace(/\s+/g, " ");


  const head = filterCard.querySelector('[data-acc="filters"]');
  const body = filterCard.querySelector('[data-acc-body="filters"]');

  const openMain = (open) => {
    filterCard.classList.toggle("is-open", open);
    if (body) body.style.display = open ? "block" : "none";
  };

  openMain(false);

  const hasParams =
    new URLSearchParams(window.location.search).toString().length > 0;
  if (hasParams) openMain(true);

  if (head && body) {
    head.addEventListener("click", () =>
      openMain(!filterCard.classList.contains("is-open"))
    );
  }

  /* 8.2 Dropdowns (default closed) */
  const drops = Array.from(document.querySelectorAll("[data-drop]"));
  const openDrop = (drop, open) => {
    const b = drop.querySelector("[data-drop-body]");
    drop.classList.toggle("is-open", open);
    if (b) b.style.display = open ? "block" : "none";
  };

  drops.forEach((drop) => {
    const btn = drop.querySelector("[data-drop-btn]");
    const b = drop.querySelector("[data-drop-body]");
    if (!btn || !b) return;

    openDrop(drop, false);

    btn.addEventListener("click", (e) => {
      e.preventDefault();
      drops.forEach((d) => d !== drop && openDrop(d, false));
      openDrop(drop, !drop.classList.contains("is-open"));

      if (drop.contains(document.getElementById("brandInput"))) {
        setTimeout(() => document.getElementById("brandInput")?.focus(), 0);
      }
    });
  });

  /* 8.3 Brand autocomplete */
 document.addEventListener("DOMContentLoaded", () => {
  const modelsByBrand = window.modelsByBrand || {};

  const brandWrap = document.querySelector('[data-custom-select="brand"]');
  const modelWrap = document.querySelector('[data-custom-select="model"]');

  const brandInput = document.getElementById("brandInput");
  const modelInput = document.getElementById("modelInput");

  const modelList = document.getElementById("modelCustomList");

  if (!brandWrap || !modelWrap || !brandInput || !modelInput || !modelList) return;

  function closeAllExcept(currentWrap) {
    document.querySelectorAll("[data-custom-select]").forEach((wrap) => {
      if (wrap !== currentWrap) {
        wrap.classList.remove("is-open");
        const list = wrap.querySelector("[data-select-list]");
        if (list) list.hidden = true;
      }
    });
  }

  function setDropdownValue(wrap, value, text) {
    const input = wrap.querySelector("input[type='hidden']");
    const textEl = wrap.querySelector("[data-select-text]");

    if (input) input.value = value || "";
    if (textEl) textEl.textContent = text || "";
  }

  function buildModelList(brand, selectedModel = "") {
    const models = modelsByBrand[brand] || [];

    modelList.innerHTML = "";

    const allBtn = document.createElement("button");
    allBtn.type = "button";
    allBtn.className = "cfsNiceOption";
    allBtn.dataset.value = "";
    allBtn.textContent = "All Models";

    if (!selectedModel) allBtn.classList.add("is-selected");

    modelList.appendChild(allBtn);

    models.forEach((model) => {
      const btn = document.createElement("button");
      btn.type = "button";
      btn.className = "cfsNiceOption";
      btn.dataset.value = model;
      btn.textContent = model;

      if (model === selectedModel) {
        btn.classList.add("is-selected");
      }

      modelList.appendChild(btn);
    });

    if (!models.includes(selectedModel)) {
      modelInput.value = "";
      setDropdownValue(modelWrap, "", "All Models");
    }
  }

  document.querySelectorAll("[data-custom-select]").forEach((wrap) => {
    const btn = wrap.querySelector("[data-select-btn]");
    const list = wrap.querySelector("[data-select-list]");

    if (!btn || !list) return;

    btn.addEventListener("click", () => {
      const isOpen = wrap.classList.contains("is-open");

      closeAllExcept(wrap);

      wrap.classList.toggle("is-open", !isOpen);
      list.hidden = isOpen;
    });

    list.addEventListener("click", (e) => {
      const option = e.target.closest(".cfsNiceOption");
      if (!option) return;

      const value = option.dataset.value || "";
      const text = option.textContent.trim();

      list.querySelectorAll(".cfsNiceOption").forEach((el) => {
        el.classList.remove("is-selected");
      });

      option.classList.add("is-selected");

      setDropdownValue(wrap, value, text);

      wrap.classList.remove("is-open");
      list.hidden = true;

      if (wrap.dataset.customSelect === "brand") {
        modelInput.value = "";
        setDropdownValue(modelWrap, "", "All Models");
        buildModelList(value, "");
      }
    });
  });

  document.addEventListener("click", (e) => {
    if (e.target.closest("[data-custom-select]")) return;
    closeAllExcept(null);
  });

  buildModelList(brandInput.value, modelInput.value);
});

  /* 8.4 Cards slider inside each car card */
  document.querySelectorAll("[data-slider]").forEach((card) => {
    let images = [];
    try {
      images = JSON.parse(card.getAttribute("data-images") || "[]");
    } catch (_) {
      images = [];
    }

    const imgEl = card.querySelector(".cfsMediaImg");
    const prev = card.querySelector("[data-prev]");
    const next = card.querySelector("[data-next]");
    const dots = Array.from(card.querySelectorAll("[data-dot]"));

    if (!imgEl || images.length === 0) return;

    let idx = 0;
    const render = () => {
      imgEl.src = images[idx];
      dots.forEach((d, i) => d.classList.toggle("is-on", i === idx));
    };

    if (prev) prev.addEventListener("click", () => {
      idx = (idx - 1 + images.length) % images.length;
      render();
    });

    if (next) next.addEventListener("click", () => {
      idx = (idx + 1) % images.length;
      render();
    });

    dots.forEach((d, i) =>
      d.addEventListener("click", () => {
        idx = i;
        render();
      })
    );

    render();
  });
})();

/* ---------- 9) Empty page engine blink (runs only if icon exists) ---------- */
(() => {
  const engine = document.querySelector(".cfsEngine");
  if (!engine) return;

  let on = false;
  setInterval(() => {
    on = !on;
    engine.classList.toggle("is-on", on);
  }, 550);
})();

/* ---------- 10) Contact form validation + shake ---------- */
(() => {
  const form = document.getElementById("contact__form");
  if (!form) return;

  const fields = Array.from(form.querySelectorAll(".field"));

  const markValid = (field) => field.classList.remove("is-invalid");
  const markInvalid = (field) => field.classList.add("is-invalid");

  const isEmpty = (el) => !el.value || String(el.value).trim() === "";

  function setError(field, msg) {
    const err = field.querySelector(".field__error");
    if (err && msg) err.textContent = msg;
  }

  function validateField(field) {
    const input = field.querySelector(".field__input");
    if (!input) return true;

    // required
    if (input.hasAttribute("required") && isEmpty(input)) {
      markInvalid(field);
      setError(field, "This field is required");
      return false;
    }

    // phone simple check (Egypt)
    if (input.name === "phone") {
      const v = String(input.value || "").trim();
      const ok = /^(\+?20)?0?1[0-2,5]\d{8}$/.test(v);
      if (!ok) {
        markInvalid(field);
        setError(field, "Enter a valid phone number");
        return false;
      }
    }

    markValid(field);
    return true;
  }

  // live validate
  fields.forEach((field) => {
    const input = field.querySelector(".field__input");
    if (!input) return;

    input.addEventListener("input", () => validateField(field));
    input.addEventListener("change", () => validateField(field));
  });

  form.addEventListener("submit", (e) => {
    let ok = true;

    fields.forEach((field) => {
      // reset animation
      field.classList.remove("is-invalid");
      void field.offsetWidth;  

      if (!validateField(field)) ok = false;
    });

    if (!ok) {
      e.preventDefault();
      const first = form.querySelector(".field.is-invalid .field__input");
      first?.focus();
    }
  });
})();
 (function () {
    const main = document.getElementById('carMainImg');
    const thumbs = document.querySelectorAll('.carDThumb');
    if (!main || !thumbs.length) return;

    thumbs.forEach(btn => {
      btn.addEventListener('click', () => {
        thumbs.forEach(b => b.classList.remove('is-on'));
        btn.classList.add('is-on');
        const src = btn.getAttribute('data-img');
        if (src) main.src = src;
      });
    });
  })();
    // Lightbox elements
     (function () {
  const mainImg = document.getElementById('carMainImg');
  const thumbBtns = Array.from(document.querySelectorAll('.carDThumb'));
  const imgs = thumbBtns.map(b => b.getAttribute('data-img')).filter(Boolean);

  const lb = document.getElementById('carLightbox');
  const lbImg = document.getElementById('lbImg');
  const lbCount = document.getElementById('lbCount');
  const lbClose = document.getElementById('lbClose');
  const lbPrev = document.getElementById('lbPrev');
  const lbNext = document.getElementById('lbNext');
  const lbStage = document.getElementById('lbStage');

  if(!mainImg || !lb || imgs.length === 0) return;

  let idx = 0;

  function setIdx(newIdx){
    idx = (newIdx + imgs.length) % imgs.length;
    lbImg.src = imgs[idx];
    lbCount.textContent = (idx + 1) + " / " + imgs.length;
  }

  function openLb(startSrc){
     
    const found = imgs.indexOf(startSrc);
    setIdx(found >= 0 ? found : 0);

    lb.classList.add('is-open');
    lb.setAttribute('aria-hidden','false');
    document.body.style.overflow = 'hidden';
  }

  function closeLb(){
    lb.classList.remove('is-open');
    lb.setAttribute('aria-hidden','true');
    document.body.style.overflow = '';
  }

  function next(){ setIdx(idx + 1); }
  function prev(){ setIdx(idx - 1); }

  mainImg.style.cursor = 'zoom-in';
  mainImg.addEventListener('click', () => openLb(mainImg.src));
 
  lbNext.addEventListener('click', next);
  lbPrev.addEventListener('click', prev);
  lbClose.addEventListener('click', closeLb);
 
  lb.addEventListener('click', (e) => {
    if(e.target === lb) closeLb();
  });
 
  document.addEventListener('keydown', (e) => {
    if(!lb.classList.contains('is-open')) return;
    if(e.key === 'Escape') closeLb();
    if(e.key === 'ArrowRight') next();
    if(e.key === 'ArrowLeft') prev();
  });
 
  let startX = null;
  lbStage.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
  }, {passive:true});

  lbStage.addEventListener('touchend', (e) => {
    if(startX === null) return;
    const endX = e.changedTouches[0].clientX;
    const diff = endX - startX;
    startX = null;

    if(Math.abs(diff) < 35) return;  
    if(diff < 0) next(); else prev();
  }, {passive:true});
  })();
//  car details share
document.addEventListener('DOMContentLoaded', function () {
  const shareBtn = document.getElementById('sharePageBtn');

  if (!shareBtn) return;

  shareBtn.addEventListener('click', async function () {
    const shareData = {
      title: document.title,
      text: 'Check out this car',
      url: window.location.href
    };

    if (navigator.share) {
      try {
        await navigator.share(shareData);
      } catch (error) {
        console.log('Share cancelled', error);
      }
    } else {
      try {
        await navigator.clipboard.writeText(window.location.href);
        alert('Page link copied!');
      } catch (error) {
        alert('Share is not supported in this browser.');
      }
    }
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const priceInputs = document.querySelectorAll(".js-price-comma");

  priceInputs.forEach(function (input) {
    function formatWithCommas() {
      let cursorPosition = input.selectionStart;
      let oldLength = input.value.length;

      const onlyNumbers = input.value.replace(/[^\d]/g, "");

      if (!onlyNumbers) {
        input.value = "";
        return;
      }

      input.value = Number(onlyNumbers).toLocaleString("en-US");

      let newLength = input.value.length;
      input.setSelectionRange(
        cursorPosition + (newLength - oldLength),
        cursorPosition + (newLength - oldLength)
      );
    }

    input.addEventListener("input", formatWithCommas);
    formatWithCommas();
  });

  document.querySelectorAll("form").forEach(function (form) {
    form.addEventListener("submit", function () {
      form.querySelectorAll(".js-price-comma").forEach(function (input) {
        input.value = input.value.replace(/[^\d]/g, "");
      });
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".js-price-comma").forEach(function (input) {
    function formatWithCommas() {
      let onlyNumbers = input.value.replace(/[^\d]/g, "");

      if (!onlyNumbers) {
        input.value = "";
        return;
      }

      input.value = Number(onlyNumbers).toLocaleString("en-US");
    }

    input.addEventListener("input", formatWithCommas);
    formatWithCommas();
  });

  const filterForm = document.querySelector(".cfsFilterCard form") || document.querySelector("form");

  if (filterForm) {
    filterForm.addEventListener("submit", function () {
      document.querySelectorAll(".js-price-comma").forEach(function (input) {
        input.value = input.value.replace(/[^\d]/g, "");
      });
    });
  }
});