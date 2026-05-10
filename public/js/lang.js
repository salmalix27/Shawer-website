const LANG_KEY = "site_lang";
const CAR_BRAND_AR = {
  "Alfa Romeo": "ألفا روميو",
  "Audi": "أودي",
  "Avatr": "أفاتر",
  "BAIC": "بايك",
  "BMW": "بي إم دبليو",
  "BYD": "بي واي دي",
  "Bentley": "بنتلي",
  "Brilliance": "بريليانس",
  "Cadillac": "كاديلاك",
  "Changan": "شانجان",
  "Changhe": "شانغه",
  "Chery": "شيري",
  "Chevrolet": "شيفروليه",
  "Chrysler": "كرايسلر",
  "Citroen": "سيتروين",
  "Cupra": "كوبرا",
  "DFSK": "دي إف إس كي",
  "DS": "دي إس",
  "Dodge": "دودج",
  "Dongfeng": "دونج فينج",
  "EXEED": "إكسيد",
  "Faw": "فاو",
  "Ferrari": "فيراري",
  "Fiat": "فيات",
  "Ford": "فورد",
  "GAC": "جي أيه سي",
  "GMC": "جي إم سي",
  "Geely": "جيلي",
  "Golf Car": "جولف كار",
  "Haval": "هافال",
  "Hummer": "هامر",
  "Honda": "هوندا",
  "Hyundai": "هيونداي",
  "Infiniti": "إنفينيتي",
  "Isuzu": "إيسوزو",
  "JAC": "جاك",
  "Jaguar": "جاكوار",
  "Jeep": "جيب",
  "Jetour": "جيتور",
  "KGM": "كي جي إم",
  "Kia": "كيا",
  "Lamborghini": "لامبورجيني",
  "Land Rover": "لاند روفر",
  "Lexus": "لكزس",
  "Lotus": "لوتس",
  "Mercedes-Benz": "مرسيدس بنز",
  "mercedes benz": "مرسيدس بنز",
  "MG": "إم جي",
  "Maserati": "مازيراتي",
  "Mazda": "مازدا",
  "Mini": "ميني",
  "Mitsubishi": "ميتسوبيشي",
  "Nissan": "نيسان",
  "Opel": "أوبل",
  "Peugeot": "بيجو",
  "Porsche": "بورشه",
  "Proton": "بروتون",
  "Renault": "رينو",
  "Rolls Royce": "رولز رويس",
  "Seat": "سيات",
  "Skoda": "سكودا",
  "Soueast": "ساو إيست",
  "Subaru": "سوبارو",
  "Suzuki": "سوزوكي",
  "Tesla": "تسلا",
  "Toyota": "تويوتا",
  "Volkswagen": "فولكس فاجن",
  "Volvo": "فولفو",
  "XPeng": "إكس بينج",
  "Zeekr": "زيكر",
  "Xiaomi": "شاومي",
  "xiaomi": "شاومي"
};
const TEXTS = {
  en: {
    nav: {
      home: "Home",
      about: "About us",
      products: "Products",
      cars: "Cars for sale",
      contact: "Contact Us",
      burgerLabel: "Toggle menu",
      logoLabel: "Shawer Home"
    },
    home: {
      heroTitle: "Because Your Dreams",
      heroTitleSpan: "Deserve Funding",
      heroDesc:
        "FinanceFlow connects you with trusted banks & financing partners, handles your application, and keeps you updated until approval.",
      heroApplyBtn: "Apply Now",
      overlayTitle: "Shawer",
      overlayDesc: "Flexible plans that match your budget",
      step1: "Submit request",
      step2: "Review",
      step3: "Approval",
      productsTitle: "Our Financial Products",
      prev: "Previous",
      next: "Next",
      prodAutoLabel: "AUTOMOTIVE",
      prodHomeFinLabel: "HOME FINISHING",
      prodMortgageLabel: "MORTGAGE",
      prodGoldLabel: "GOLD",
      prodSummerLabel: "SUMMER VEHICLES",
      prodInsuranceLabel: "INSURANCE",
      aboutTitle: "About Shawer Company",
      aboutP1: "Shawer is a smart financing platform built to help you move faster toward your goals.",
      aboutP2:
        "We simplify the financing process by handling everything for you from collecting your information and documents to submitting your application and following up until approval.",
      aboutP3: "No confusion. No endless paperwork. No stress.",
      aboutBtn: "Get To Know Us More",
      contactTitle: "Get in touch",
      labelName: "Name",
      phName: "Enter your name",
      labelPhone: "Phone Number",
      phPhone: "Enter your phone",
      labelProduct: "Product Name",
      optSelect: "Please select",
      labelSubProduct: "Sub Product",
      labelCarBrand: "Car Brand",
      phBrand: "e.g. Toyota",
      labelCarModel: "Car Model",
      phModel: "e.g. Corolla",
      labelCarComment: "Your Comment",
      phComment: "Type your comment",
      sendBtn: "SEND",
      optAuto: "Automotive",
      optHomeFin: "Home Finishing",
      optMortgage: "Mortgage",
      optGold: "Gold",
      optInsurance: "Insurance",
      optBrandNew: "Brand New Cars",
      optUsed: "Used Cars",
      optTransport: "Transportation",
      optVans: "Vans"
    },
    footer: {
      menuTitle: "MENU",
      home: "HOME",
      products: "PRODUCTS",
      about: "ABOUT US",
      cars: "CARS FOR SALE",
      address: "WESTERN 3RD DISTRICT - VILLA 20 - EL SHROUQ CITY - CAIRO",
      rights: "All rights reserved",
      aboutText:
        "From owning your dream car to investing in gold, Mortgage, or even your own yacht, Shawer makes financing your ambitions possible. We also help you secure the right insurance solutions, giving you peace of mind alongside your funding. By connecting you with trusted banks, financing, and insurance providers, we handle the process from start to approval. Dare to aim higher  and let Shawer turn your aspirations into funded and protected realities."
    },
    // about
  aboutPage: {
  title: "About Shawer",
  titleSpan: "Company",
  desc:
    "Welcome to Shawer, a smart financing platform that connects you with finance providers across Egypt. We simplify the process and guide you step by step until your funding is approved.",

  visionTitle: "Our Vision",
  visionPara:
    "To be Egypt’s most trusted financial advisor and loan consultancy, known for simplifying finance and opening doors to opportunity for all.",

  missionTitle: "Our Mission",
  missionPara:
    "At Shawer, our mission is to simplify the financing journey by connecting individuals with banks, financing, and insurance providers. We guide our clients step by step, handle the complexity on their behalf, and help them secure the right solutions to turn their goals into reality with confidence.",

  teamTitle: "Our Team",

  roleMostafa: "Sales Manager",
  descMostafa:
    "Leads the sales department, develops sales strategies, and ensures revenue targets are achieved while maintaining strong relationships with clients and financial partners.",

  roleBassant: "Sales Team Leader",
  descBassant:
    "Develops sales strategies, manages client relationships, and supports performance tracking to achieve team targets.",

  roleMawada: "Sales Team Leader",
  descMawada:
    "Supports financial partnerships, coordinates client requests, and ensures smooth communication between stakeholders.",

  roleFares: "Head of Digital Marketing",
  descFares:
    "Leads digital campaigns, performance marketing, and brand growth initiatives across social and paid channels.",

  roleMalak: "Marketing Team Leader",
  descMalak:
    "Oversees marketing performance, coordinates creative production, and ensures consistent brand messaging.",

  ceoTitle: "Meet Our Founder &CEO",
  ceoPara1:
    "Is responsible for setting the company’s strategic vision, leading overall operations, and ensuring sustainable growth. The role focuses on building strong partnerships with financial institutions, overseeing executive decisions, and positioning the company as a trusted financial brokerage brand.",
 
  roleAhmed: "Founder & CEO",
  descAhmed:
    "Responsible for setting the company’s strategic vision, leading overall operations, and ensuring sustainable growth. Builds strong partnerships with financial institutions, oversees executive decisions, and positions Shawer as a trusted brand.",
    providersTitle:"Our Networks",
    showroomsTitle:"Our Showroom Partners"
},
productsPage: {
  title: "Shawer - Products",
  auto: "AUTOMOTIVE",
  homeFin: "HOME FINISHING",
  gold: "GOLD",
  mortgage: "MORTGAGE",
  summer: "SUMMER VEHICLES",
  insurance: "INSURANCE"
},
automotivePage: {
  title: "Automotive - Shawer",
  h1: "Automotive",
  desc:
    "We simplify the process and offer flexible payment options. From application to approval, Shawer is with you every step of the way.",
  apply: "APPLY NOW",
  brandNew: "BRAND NEW CARS",
  used: "USED CARS",
  transport: "TRANSPORTATION",
  vans: "VANS"
},
brandNewCarsPage: {
  title: "Brand New Cars - Shawer",
  h1: "Brand New Cars",
  b1: "Zero Down Payment.",
  b2: "Up to 10 years.",
  b3: "Without Admin Fees.",
  b4: "Insurance (Your Choice).",
  apply: "APPLY NOW",
  calcHead: "CAR LOAN CALCULATOR",
  price: "PRICE OF CAR",
  down: "DOWN PAYMENT",
  years: "PERIOD (YEARS)",
  interest: "INTEREST (% P.A.)",
  calcBtn: "CALCULATE",
  monthly: "MONTHLY INSTALLMENT",
  loan: "LOAN AMOUNT",
  totalInterest: "TOTAL INTEREST PAID"
},
homeFinishingPage: {
  title: "Home Finishing - Shawer",
  h1: "Home Finishing",
  b1: "Zero Down Payment.",
  b2: "Up to 5 years.",
  b3: "Up to 6 million.",
  apply: "APPLY NOW"
},
goldPage: {
  title: "Gold - Shawer",
  h1: "Gold",
  goldSubtitle:"Premium Benefits. Smart Investment.",
  b1: "Zero Down Payment.",
  b2: "Up to 2 years.",
  b3: "Up to 3 million.",
  apply: "APPLY NOW"
},
mortgagePage: {
  title: "Mortgage - Shawer",
  h1: "Mortgage",
  mortgageSubtitle: "UNLOCK THE DOOR TO YOUR FUTURE HOME.",
  block1Title: "Unit Purchasing",
  b1_1: "Zero Down Payment.",
  b1_2: "Up to 12 years.",
  b1_3: "Up to Rate 14%.",
  apply: "APPLY NOW",

  block2Title: "Sell & Lease Back",
  b2_1: "Up to 80% from unit.",
  b2_2: "Up to 12 years.",
  b2_3: "Up to Rate 16%."
},
summerVehiclesPage: {
  title: "Summer Vehicles - Shawer",
  h1: "Summer Vehicles",
  b1: "Zero Down Payment.",
  b2: "Up to 5 years.",
  apply: "APPLY NOW",
  yacht: "YACHT",
  beachBuggy: "BEACH BUGGY",
  golfCar: "GOLF CAR",
  jetSki: "JET SKI",
  boat: "BOAT"
},
insurancePage: {
  title: "Insurance - Shawer",
  h1: "Insurance",
  inssubtitle:"PROTECT YOUR CAR & DRIVE WITH PEACE OF MIND !",
  inssubtitle2:"We offer the best car insurance plans with competitive prices and comprehensive coverage",
  b1: "Comprehensive or Third-Party Insurance.",
  b2: "Fast policy issuance.",
  b3: "Quick claims and compensation.",
  insBullet4:"Wide network of approved service centers.",
  insBullet5:"Best interest rate in the market.",
  apply: "APPLY NOW"
},
usedCarsPage: {
  title: "Used Cars - Shawer",
  h1: "Used Cars",
  b1: "From 2009.",
  b2: "Start from 10% Down Payment.",
  b3: "Up to 7 years.",
  b4: "Without Admin Fees.",
  apply: "APPLY NOW",
  calcHead: "CAR LOAN CALCULATOR",
  price: "PRICE OF CAR",
  down: "DOWN PAYMENT",
  years: "PERIOD (YEARS)",
  interest: "INTEREST (% P.A.)",
  calcBtn: "CALCULATE",
  monthly: "MONTHLY INSTALLMENT",
  loan: "LOAN AMOUNT",
  totalInterest: "TOTAL INTEREST PAID"
},
transportationPage: {
  title: "Transportation - Shawer",
  h1: "Transportation",
  b1: "20% Down Payment.",
  b2: "Up to 5 years.",
  b3: "Insurance (Your Choice).",
  apply: "APPLY NOW",

  bus: "BUS",
  coaster: "COASTER",
  microbus: "MICROBUS",
  truck: "TRUCK",
  pickup: "PICKUP",
  trailerHead: "TRAILER HEAD",
  trailerTail: "TRAILER TAIL",

  calcHead: "CAR LOAN CALCULATOR",
  price: "PRICE OF CAR",
  down: "DOWN PAYMENT",
  years: "PERIOD (YEARS)",
  interest: "INTEREST (% P.A.)",
  calcBtn: "CALCULATE",
  monthly: "MONTHLY INSTALLMENT",
  loan: "LOAN AMOUNT",
  totalInterest: "TOTAL INTEREST PAID"
},
vanPage: {
  title: "Van - Shawer",
  h1: "Van",
  b1: "30% Down Payment.",
  b2: "Up to 7 years.",
  apply: "APPLY NOW",

  suzuki: "SUZUKI",
  chevrolet: "CHEVROLET",
  kyc: "KYC",

  calcHead: "CAR LOAN CALCULATOR",
  price: "PRICE OF CAR",
  down: "DOWN PAYMENT",
  years: "PERIOD (YEARS)",
  interest: "INTEREST (% P.A.)",
  calcBtn: "CALCULATE",
  monthly: "MONTHLY INSTALLMENT",
  loan: "LOAN AMOUNT",
  totalInterest: "TOTAL INTEREST PAID"
},
carsForSalePage: {
  title: "Cars for Sale - Shawer",
  h1: "Cars for Sale",
  sub: "Find your perfect car with smart filters.",
  results: "Results",
  filtersTitle: "Filters",
  filtersHint: "Pick what you need",
  brand: "Brand",
model: "Model",
allBrands: "All Brands",
allModels: "All Models",
  price: "Price (EGP)",
  km: "Kilometres",
  year: "Year",
  transmission: "Transmission",
  fuel: "Fuel Type",
  min: "Min",
  max: "Max",
  reset: "Reset",
  apply: "Apply Filters",
  emptyTitle: "Oops! No cars match your filters",
  emptyDesc: "Try removing some filters or reset to see all available cars.",
  back: "Back to Cars",
  whatsapp: "WhatsApp",
  CALL: "CALL NOW",
  metaYear: "Year",
  metaKm: "KM",
  metaFuel: "Fuel",
  metaTrans: "Transmission",
  cfsPriceLabel: "Price (EGP)"
},
carDetailsPage: {
  whatsapp: "WHATSAPP",
  CALL: "CALL NOW",
  highlights: "Highlights",
  details: "Details",
  description: "Description",

  cond: "Car condition",
  km: "K.M",
  year: "Year",
  fuel: "Fuel type",
  trans: "Transmission type",

  brand: "Brand",
  model: "Model",
  version: "Category",
  payment: "Payment Options",
  body: "Body Type",
  ac: "Air Conditioning",
  color: "Color",
  doors: "Number of doors",
  interior: "Interior",

  calcHead: "CAR LOAN CALCULATOR",
  price: "PRICE OF CAR",
  down: "DOWN PAYMENT",
  years: "PERIOD (YEARS)",
  interest: "INTEREST (% P.A.)",
  calcBtn: "CALCULATE",
  monthly: "MONTHLY INSTALLMENT",
  loan: "LOAN AMOUNT",
  totalInterest: "TOTAL INTEREST PAID",
  apply: "APPLY NOW"
},
  },
ar: {
  nav: {
    home: "الرئيسية",
    about: "من نحن",
    products: "المنتجات",
    cars: "سيارات للبيع",
    admin: "المتابعة بصفة مسؤول",
    contact: "تواصل معنا",
    burgerLabel: "فتح/إغلاق القائمة",
    logoLabel: "شاور - الصفحة الرئيسية"
  },
  home: {
    heroTitle: "لأن أحلامك",
    heroTitleSpan: "تستحق التمويل",
    heroDesc:
      "تربطك منصة شاور ببنوك وجهات تمويل موثوقة، وتتولى تقديم طلبك، وتُطلعك على المستجدات حتى صدور الموافقة۔",
    heroApplyBtn: "قدّم الآن",
    overlayTitle: "Shawer",
    overlayDesc: "خطط مرنة تناسب ميزانيتك",
    step1: "تقديم الطلب",
    step2: "المراجعة",
    step3: "الموافقة",
    productsTitle: "منتجاتنا المالية",
    prev: "السابق",
    next: "التالي",

    prodAutoLabel: "تمويل السيارات",
    prodHomeFinLabel: "تشطيب المنزل",
    prodMortgageLabel: "التمويل العقاري",
    prodGoldLabel: "الذهب",
    prodSummerLabel: "مركبات صيفية",
    prodInsuranceLabel: "التأمين",

    aboutTitle: "نبذة عن شركة شاور",
    aboutP1: "شاور منصة تمويل ذكية تساعدك على الوصول إلى أهدافك بسرعة أكبر۔",
    aboutP2:
      "نُبسّط إجراءات التمويل ونتولى كل التفاصيل  بدءًا من جمع بياناتك ومستنداتك، مرورًا بتقديم الطلب، وصولًا إلى المتابعة حتى صدور الموافقة۔",
    aboutP3: "دون تعقيد۔ دون معاملات ورقية لا تنتهي۔ دون ضغط۔",
    aboutBtn: "تعرّف علينا أكثر",

    contactTitle: "تواصل معنا",
    labelName: "الاسم",
    phName: "أدخل اسمك",
    labelPhone: "رقم الهاتف",
    phPhone: "أدخل رقم هاتفك",
    labelProduct: "اسم المنتج",
    optSelect: "يرجى الاختيار",
    labelSubProduct: "المنتج الفرعي",

    labelCarBrand: "ماركة السيارة",
    phBrand: "مثال: تويوتا",
    labelCarModel: "طراز السيارة",
    phModel: "مثال: كورولا",
    labelCarComment: "ملاحظاتك",
    phComment: "اكتب ملاحظتك",
    sendBtn: "إرسال",

    optAuto: "تمويل السيارات",
    optHomeFin: "تشطيب المنزل",
    optMortgage: "التمويل العقاري",
    optGold: "الذهب",
    optInsurance: "التأمين",

    optBrandNew: "سيارات جديدة",
    optUsed: "سيارات مستعملة",
    optTransport: "النقل",
    optVans: "الحافلات"
  },
  footer: {
    menuTitle: "القائمة",
    home: "الرئيسية",
    products: "المنتجات",
    about: "من نحن",
    cars: "سيارات للبيع",
    address: "الحي الغربي الثالث - فيلا 20 - مدينة الشروق - القاهرة",
    rights: "جميع الحقوق محفوظة",
    aboutText:
      "من امتلاك سيارة أحلامك إلى الاستثمار في الذهب أو التمويل العقاري أو حتى امتلاك يختك الخاص، تُمكّنك شاور من تمويل طموحاتك۔ كما نساعدك في الحصول على حلول التأمين المناسبة لتنعمي براحة البال إلى جانب التمويل۔ ومن خلال ربطك ببنوك وجهات تمويل وتأمين موثوقة، نتولى الإجراءات من البداية وحتى الموافقة۔ تجرّأ على رفع سقف طموحاتك ودع شاور تحوّل تطلعاتك إلى واقع ممول ومؤمَّن۔"
  },

  aboutPage: {
    title: "  عن شاور  ",
    desc:
      "مرحبًا بك في شاور، منصة تمويل ذكية تربطك بجهات التمويل المختلفة في مصر۔ نُبسّط الإجراءات ونرشدك خطوة بخطوة حتى تتم الموافقة على تمويلك۔",

    visionTitle: "رؤيتنا",
    visionPara:
      "أن نكون المستشار المالي الأكثر موثوقية في مصر وخدمة استشارات القروض، وأن نُعرَف بتبسيط التمويل وفتح آفاق الفرص للجميع۔",

    missionTitle: "رسالتنا",
    missionPara:
      "تتمثل رسالتنا في شاور في تبسيط رحلة التمويل عبر ربط الأفراد بالبنوك وجهات التمويل وشركات التأمين۔ نوجّه عملاءنا خطوة بخطوة، ونتولى التعقيدات نيابةً عنهم، ونساعدهم على اختيار الحلول المناسبة لتحويل أهدافهم إلى واقع بثقة۔",

    teamTitle: "فريقنا",

    roleMostafa: "مدير المبيعات",
    descMostafa:
      "يقود قسم المبيعات، ويطوّر استراتيجيات البيع، ويضمن تحقيق أهداف الإيرادات مع الحفاظ على علاقات قوية مع العملاء والشركاء الماليين۔",

    roleBassant: "قائدة فريق المبيعات",
    descBassant:
      "تضع استراتيجيات المبيعات، وتدير علاقات العملاء، وتدعم متابعة الأداء لتحقيق أهداف الفريق۔",

    roleMawada: "قائدة فريق المبيعات",
    descMawada:
      "تدعم الشراكات المالية، وتنسّق طلبات العملاء، وتضمن سلاسة التواصل بين الأطراف المعنية۔",

    roleFares: "رئيس التسويق الرقمي",
    descFares:
      "يقود الحملات الرقمية وتسويق الأداء ومبادرات نمو العلامة التجارية عبر القنوات الاجتماعية والمدفوعة۔",

    roleMalak: "قائدة فريق التسويق",
    descMalak:
      "تشرف على أداء التسويق، وتنسّق الإنتاج الإبداعي، وتضمن اتساق رسائل العلامة التجارية۔",

    ceoTitle: " تعرّف على المؤسس و الرئيس التنفيذي",

    ceoPara1:
      "هو مسؤول عن وضع الرؤية الاستراتيجية للشركة، وقيادة العمليات العامة، وضمان النمو المستدام۔ ويركّز هذا الدور على بناء شراكات قوية مع المؤسسات المالية، والإشراف على القرارات التنفيذية، وترسيخ مكانة الشركة كعلامة موثوقة في مجال الوساطة المالية۔",

    roleAhmed: "المؤسس والرئيس التنفيذي",
    descAhmed:
      "يتحمل مسؤولية وضع الرؤية الاستراتيجية للشركة، وقيادة العمليات التشغيلية، وضمان نمو مستدام۔ يبني شراكات قوية مع المؤسسات المالية، ويشرف على القرارات التنفيذية، ويعزّز مكانة شاور كعلامة موثوقة۔",
    providersTitle: "شبكاتنا",
    showroomsTitle: "مقدمو خدماتنا"
  },

  productsPage: {
    title: "شاور - المنتجات",
    auto: "تمويل السيارات",
    homeFin: "تشطيب المنزل",
    gold: "الذهب",
    mortgage: "التمويل العقاري",
    summer: "مركبات صيفية",
    insurance: "التأمين"
  },

  automotivePage: {
    title: "تمويل السيارات - شاور",
    h1: "تمويل السيارات",
    desc:
      "نُبسّط الإجراءات ونوفّر خيارات سداد مرنة۔ من تقديم الطلب حتى صدور الموافقة، شاور معك في كل خطوة۔",
    apply: "قدّم الآن",
    brandNew: "سيارات جديدة",
    used: "سيارات مستعملة",
    transport: "النقل",
    vans: "الحافلات"
  },

  brandNewCarsPage: {
    title: "السيارات الجديدة - شاور",
    h1: "السيارات الجديدة",
    b1: "بدون دفعة مقدمة۔",
    b2: "حتى 10 سنوات۔",
    b3: "بدون رسوم إدارية۔",
    b4: "التأمين حسب اختيارك۔",
    apply: "قدّم الآن",
    calcHead: "حاسبة تمويل السيارة",
    price: "سعر السيارة",
    down: "الدفعة المقدمة",
    years: "المدة بالسنوات",
    interest: "الفائدة ٪ سنويًا",
    calcBtn: "احسب",
    monthly: "القسط الشهري",
    loan: "مبلغ التمويل",
    totalInterest: "إجمالي الفوائد المدفوعة"
  },

  homeFinishingPage: {
    title: "تشطيب المنزل - شاور",
    h1: "تشطيب المنزل",
    b1: "بدون دفعة مقدمة۔",
    b2: "حتى 5 سنوات۔",
    b3: "حتى 6 ملايين۔",
    apply: "قدّم الآن"
  },

  goldPage: {
    title: "تمويل الذهب - شاور",
    h1: "تمويل الذهب",
    goldSubtitle: "مزايا متميزة۔ استثمار ذكي۔",
    b1: "بدون دفعة مقدمة۔",
    b2: "حتى سنتين۔",
    b3: "حتى 3 ملايين۔",
    apply: "قدّم الآن"
  },

  mortgagePage: {
    title: "التمويل العقاري - شاور",
    h1: "التمويل العقاري",
    mortgageSubtitle: "افتح الباب نحو منزلك المستقبلي",
    block1Title: "شراء وحدة سكنية",
    b1_1: "بدون دفعة مقدمة۔",
    b1_2: "حتى 12 سنة۔",
    b1_3: "بفائدة تصل إلى 14٪۔",
    apply: "قدّم الآن",

    block2Title: "البيع وإعادة الاستئجار",
    b2_1: "تمويل يصل إلى 80٪ من قيمة الوحدة۔",
    b2_2: "حتى 12 سنة۔",
    b2_3: "بفائدة تصل إلى 16٪۔"
  },

  summerVehiclesPage: {
    title: "المركبات الصيفية - شاور",
    h1: "المركبات الصيفية",
    b1: "بدون دفعة مقدمة۔",
    b2: "حتى 5 سنوات۔",
    apply: "قدّم الآن",
    yacht: "يخت",
    beachBuggy: "عربة شاطئية",
    golfCar: "عربة جولف",
    jetSki: "دراجة مائية",
    boat: "قارب"
  },

  insurancePage: {
    title: "التأمين - شاور",
    h1: "التأمين",
    inssubtitle: "احمِ سيارتك وقد بثقة وراحة بال!",
    inssubtitle2: "نقدم أفضل خطط تأمين السيارات بأسعار تنافسية وتغطية شاملة۔",
    b1: "تأمين شامل أو ضد الغير۔",
    b2: "إصدار سريع لوثيقة التأمين",
    b3: "سرعة في المطالبات والتعويض۔",
    insBullet4: "شبكة واسعة من مراكز الخدمة المعتمدة۔",
    insBullet5: "أفضل سعر في السوق۔",
    apply: "قدّم الآن"
  },

  usedCarsPage: {
    title: "السيارات المستعملة - شاور",
    h1: "السيارات المستعملة",
    b1: "من موديل 2009 فما بعد۔",
    b2: "دفعة مقدمة تبدأ من 10٪۔",
    b3: "حتى 7 سنوات۔",
    b4: "بدون رسوم إدارية۔",
    apply: "قدّم الآن",
    calcHead: "حاسبة تمويل السيارة",
    price: "سعر السيارة",
    down: "الدفعة المقدمة",
    years: "المدة بالسنوات",
    interest: "الفائدة ٪ سنويًا",
    calcBtn: "احسب",
    monthly: "القسط الشهري",
    loan: "مبلغ التمويل",
    totalInterest: "إجمالي الفوائد المدفوعة"
  },

  transportationPage: {
    title: "تمويل النقل - شاور",
    h1: "تمويل النقل",
    b1: "دفعة مقدمة 20٪۔",
    b2: "حتى 5 سنوات۔",
    b3: "التأمين حسب اختيارك۔",
    apply: "قدّم الآن",

    bus: "أتوبيس",
    coaster: "كوستر",
    microbus: "ميكروباص",
    truck: "شاحنة",
    pickup: "بيك أب",
    trailerHead: "رأس مقطورة",
    trailerTail: "ذيل مقطورة",

    calcHead: "حاسبة التمويل",
    price: "سعر المركبة",
    down: "الدفعة المقدمة",
    years: "المدة بالسنوات",
    interest: "الفائدة ٪ سنويًا",
    calcBtn: "احسب",
    monthly: "القسط الشهري",
    loan: "مبلغ التمويل",
    totalInterest: "إجمالي الفوائد المدفوعة"
  },

  vanPage: {
    title: "تمويل الفانات - شاور",
    h1: "تمويل الفانات",
    b1: "دفعة مقدمة 30٪۔",
    b2: "حتى 7 سنوات۔",
    apply: "قدّم الآن",

    suzuki: "سوزوكي",
    chevrolet: "شيفروليه",
    kyc: "كي واي سي",

    calcHead: "حاسبة التمويل",
    price: "سعر المركبة",
    down: "الدفعة المقدمة",
    years: "المدة بالسنوات",
    interest: "الفائدة ٪ سنويًا",
    calcBtn: "احسب",
    monthly: "القسط الشهري",
    loan: "مبلغ التمويل",
    totalInterest: "إجمالي الفوائد المدفوعة"
  },

  carsForSalePage: {
    title: "سيارات للبيع - شاور",
    h1: "سيارات للبيع",
    sub: "اعثر على سيارتك المثالية باستخدام فلاتر ذكية۔",
    results: "عدد النتائج",
    filtersTitle: "الفلاتر",
    filtersHint: "اختر ما تحتاج إليه",
  brand: "الماركة",
model: "الموديل",
allBrands: "كل الماركات",
allModels: "كل الموديلات",
    price: "السعر جنيه",
    km: "عدد الكيلومترات",
    year: "السنة",
    transmission: "ناقل الحركة",
    fuel: "نوع الوقود",
    min: "الحد الأدنى",
    max: "الحد الأقصى",
    reset: "إعادة ضبط",
    apply: "تطبيق الفلاتر",
    emptyTitle: "عذرًا! لا توجد سيارات مطابقة للفلاتر",
    emptyDesc: "جرّب إزالة بعض الفلاتر أو أعد الضبط لعرض جميع السيارات المتاحة۔",
    back: "العودة إلى السيارات",
    whatsapp: "واتساب",
    CALL: "اتصل الآن",
    metaYear: "السنة",
    metaKm: "كم",
    metaFuel: "الوقود",
    metaTrans: "ناقل الحركة",
    cfsPriceLabel: "السعر (ج.م)"
  },

  carDetailsPage: {
    whatsapp: "واتساب",
    CALL: "اتصل الآن",
    highlights: "المزايا",
    details: "التفاصيل",
    description: "الوصف",

    cond: "حالة السيارة",
    km: "كم",
    year: "السنة",
    fuel: "نوع الوقود",
    trans: "نوع ناقل الحركة",

    brand: "الماركة",
    model: "الموديل",
    version: "الفئة",
    payment: "خيارات الدفع",
    body: "نوع الهيكل",
    ac: "مكيف الهواء",
    color: "اللون",
    doors: "عدد الأبواب",
    interior: "المقصورة",

    calcHead: "حاسبة تمويل السيارة",
    price: "سعر السيارة",
    down: "الدفعة المقدمة",
    years: "المدة بالسنوات",
    interest: "الفائدة ٪ سنويًا",
    calcBtn: "احسب",
    monthly: "القسط الشهري",
    loan: "مبلغ التمويل",
    totalInterest: "إجمالي الفوائد المدفوعة",
    apply: "قدّم الآن"
  }
}
};

function setText(id, value) {
  const el = document.getElementById(id);
  if (el && value != null) el.textContent = value;
}

function setPlaceholder(id, value) {
  const el = document.getElementById(id);
  if (el && value != null) el.placeholder = value;
}

function applyNavTranslation(lang) {
  const dict = (TEXTS[lang] || TEXTS.en).nav;

  const langBtn = document.getElementById("langToggle");
  if (langBtn) langBtn.textContent = (lang === "ar") ? "AR" : "EN";

  const menuLinks = document.querySelectorAll("#menu .menu__link");
  if (menuLinks.length >= 4) {
    menuLinks[0].textContent = dict.home;
    menuLinks[1].textContent = dict.about;
    menuLinks[2].textContent = dict.products;
    menuLinks[3].textContent = dict.cars;
  }

  const adminBtn = document.querySelector(".nav__actions .btn--admin");
  if (adminBtn) adminBtn.textContent = dict.admin;

  const contactBtn =
    document.getElementById("navContact") ||
    document.querySelector(".btn--navContact");

  if (contactBtn) contactBtn.textContent = dict.contact;

  const burger = document.getElementById("burger");
  if (burger) burger.setAttribute("aria-label", dict.burgerLabel);

  const logo = document.querySelector(".brand");
  if (logo) logo.setAttribute("aria-label", dict.logoLabel);
}

function applyHomeTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).home;

  // Hero
  setText("heroTitle", d.heroTitle);
  setText("heroTitleSpan", d.heroTitleSpan);
  setText("heroDesc", d.heroDesc);
  setText("heroApplyBtn", d.heroApplyBtn);

  // Overlay
  setText("overlayTitle", d.overlayTitle);
  setText("overlayDesc", d.overlayDesc);
  setText("step1", d.step1);  
  setText("step2", d.step2);
  setText("step3", d.step3);

  // Products
  setText("productsTitle", d.productsTitle);
  const prev = document.getElementById("prodPrev");
  if (prev) prev.setAttribute("aria-label", d.prev);
  const next = document.getElementById("prodNext");
  if (next) next.setAttribute("aria-label", d.next);

  setText("prodAutoLabel", d.prodAutoLabel);
  setText("prodHomeFinLabel", d.prodHomeFinLabel);
  setText("prodMortgageLabel", d.prodMortgageLabel);
  setText("prodGoldLabel", d.prodGoldLabel);
  setText("prodSummerLabel", d.prodSummerLabel);
  setText("prodInsuranceLabel", d.prodInsuranceLabel);

  // About
  setText("aboutTitle", d.aboutTitle);
  setText("aboutP1", d.aboutP1);
  setText("aboutP2", d.aboutP2);
  setText("aboutP3", d.aboutP3);
  setText("aboutBtn", d.aboutBtn);

  // Contact
  setText("contactTitle", d.contactTitle);

  setText("labelName", d.labelName);
  setPlaceholder("c_name", d.phName);

  setText("labelPhone", d.labelPhone);
  setPlaceholder("c_phone", d.phPhone);

  setText("labelProduct", d.labelProduct);
  setText("optSelect", d.optSelect);

  setText("labelSubProduct", d.labelSubProduct);
  setText("optSelect2", d.optSelect);

  setText("labelCarBrand", d.labelCarBrand);
  setPlaceholder("c_car_brand", d.phBrand);

  setText("labelCarModel", d.labelCarModel);
  setPlaceholder("c_car_model", d.phModel);

  setText("labelCarComment", d.labelCarComment);
  setPlaceholder("c_car_comment", d.phComment);

  setText("sendBtn", d.sendBtn);

  // Options text
  setText("optAuto", d.optAuto);
  setText("optHomeFin", d.optHomeFin);
  setText("optMortgage", d.optMortgage);
  setText("optGold", d.optGold);
  setText("optInsurance", d.optInsurance);

  setText("optBrandNew", d.optBrandNew);
  setText("optUsed", d.optUsed);
  setText("optTransport", d.optTransport);
  setText("optVans", d.optVans);
  
}

function applyFooterTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).footer;

  setText("footerMenuTitle", d.menuTitle);
  setText("footerLinkHome", d.home);
  setText("footerLinkProducts", d.products);
  setText("footerLinkAbout", d.about);
  setText("footerLinkCars", d.cars);
  setText("footerAddress", d.address);
  setText("footerRights", d.rights);
  setText("footerAboutText", d.aboutText);
}

function applyAboutPageTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).aboutPage;
  if (!d) return;

  setText("aboutPageTitle", d.title);
  setText("aboutPageTitleSpan", d.titleSpan);
  setText("aboutPageDesc", d.desc);

  setText("visionTitle", d.visionTitle);
  setText("visionPara", d.visionPara);

  setText("missionTitle", d.missionTitle);
  setText("missionPara", d.missionPara);

  setText("teamTitle", d.teamTitle);

  setText("roleMostafa", d.roleMostafa);
  setText("descMostafa", d.descMostafa);

  setText("roleBassant", d.roleBassant);
  setText("descBassant", d.descBassant);

  setText("roleMawada", d.roleMawada);
  setText("descMawada", d.descMawada);

  setText("roleFares", d.roleFares);
  setText("descFares", d.descFares);

  setText("roleMalak", d.roleMalak);
  setText("descMalak", d.descMalak);

  setText("ceoTitle", d.ceoTitle);
  setText("ceoTitleSpan", d.ceoTitleSpan);
  setText("ceoPara1", d.ceoPara1);
  setText("ceoPara2", d.ceoPara2);

  setText("roleAhmed", d.roleAhmed);
  setText("descAhmed", d.descAhmed);
  setText("providersTitle", d.providersTitle);
setText("showroomsTitle", d.showroomsTitle);
}
function applyProductsPageTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).productsPage;
  if (!d) return;
 
  if (document.title) document.title = d.title;

  setText("prodPageAuto", d.auto);
  setText("prodPageHomeFin", d.homeFin);
  setText("prodPageGold", d.gold);
  setText("prodPageMortgage", d.mortgage);
  setText("prodPageSummer", d.summer);
  setText("prodPageInsurance", d.insurance);
}
function applyAutomotivePageTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).automotivePage;
  if (!d) return;

  document.title = d.title;

  setText("autoPageTitle", d.h1);
  setText("autoPageDesc", d.desc);
  setText("autoPageApplyBtn", d.apply);

  setText("autoBrandNewLabel", d.brandNew);
  setText("autoUsedLabel", d.used);
  setText("autoTransportLabel", d.transport);
  setText("autoVansLabel", d.vans);
}
function applyBrandNewCarsTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).brandNewCarsPage;
  if (!d) return;

  document.title = d.title;

  setText("bncTitle", d.h1);

  setText("bncBullet1", d.b1);
  setText("bncBullet2", d.b2);
  setText("bncBullet3", d.b3);
  setText("bncBullet4", d.b4);

  setText("bncApplyBtn", d.apply);

  setText("bncCalcHead", d.calcHead);
  setText("bncLabelPrice", d.price);
  setText("bncLabelDown", d.down);
  setText("bncLabelYears", d.years);
  setText("bncLabelInterest", d.interest);

  setText("bncCalcBtnText", d.calcBtn);

  setText("bncMonthlyLabel", d.monthly);
  setText("bncLoanLabel", d.loan);
  setText("bncInterestLabel", d.totalInterest);
}
function applyHomeFinishingTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).homeFinishingPage;
  if (!d) return;

  document.title = d.title;

  setText("hfTitle", d.h1);
  setText("hfBullet1", d.b1);
  setText("hfBullet2", d.b2);
  setText("hfBullet3", d.b3);
  setText("hfApplyBtn", d.apply);
}
function applyGoldTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).goldPage;
  if (!d) return;

  document.title = d.title;

  setText("goldTitle", d.h1);
  setText("goldSubtitle",d.goldSubtitle)
  setText("goldBullet1", d.b1);
  setText("goldBullet2", d.b2);
  setText("goldBullet3", d.b3);
  setText("goldApplyBtn", d.apply);
}
function applyMortgageTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).mortgagePage;
  if (!d) return;

  document.title = d.title;

  setText("mortgageTitle", d.h1);
  setText("mortgageSubtitle",d.mortgageSubtitle)
  setText("mortgageBlock1Title", d.block1Title);
  setText("mortgageB1_1", d.b1_1);
  setText("mortgageB1_2", d.b1_2);
  setText("mortgageB1_3", d.b1_3);
  setText("mortgageApply1", d.apply);

  setText("mortgageBlock2Title", d.block2Title);
  setText("mortgageB2_1", d.b2_1);
  setText("mortgageB2_2", d.b2_2);
  setText("mortgageB2_3", d.b2_3);
  setText("mortgageApply2", d.apply);
}
function applySummerVehiclesTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).summerVehiclesPage;
  if (!d) return;

  document.title = d.title;

  setText("svTitle", d.h1);
  setText("svBullet1", d.b1);
  setText("svBullet2", d.b2);
  setText("svApplyBtn", d.apply);

  setText("svYacht", d.yacht);
  setText("svBeachBuggy", d.beachBuggy);
  setText("svGolfCar", d.golfCar);
  setText("svJetSki", d.jetSki);
  setText("svBoat", d.boat);
}
function applyInsuranceTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).insurancePage;
  if (!d) return;

  document.title = d.title;

  setText("insTitle", d.h1);
  setText("inssubtitle", d.inssubtitle);
  setText("inssubtitle2", d.inssubtitle2);
  setText("insBullet1", d.b1);
  setText("insBullet2", d.b2);
  setText("insBullet3", d.b3);
  setText("insBullet4", d.insBullet4);
  setText("insBullet5", d.insBullet5);
  setText("insApplyBtn", d.apply);
}
function applyUsedCarsTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).usedCarsPage;
  if (!d) return;

  document.title = d.title;

  setText("usedTitle", d.h1);

  setText("usedBullet1", d.b1);
  setText("usedBullet2", d.b2);
  setText("usedBullet3", d.b3);
  setText("usedBullet4", d.b4);

  setText("usedApplyBtn", d.apply);

  setText("usedCalcHead", d.calcHead);
  setText("usedLabelPrice", d.price);
  setText("usedLabelDown", d.down);
  setText("usedLabelYears", d.years);
  setText("usedLabelInterest", d.interest);

  setText("usedCalcBtnText", d.calcBtn);

  setText("usedMonthlyLabel", d.monthly);
  setText("usedLoanLabel", d.loan);
  setText("usedInterestLabel", d.totalInterest);
}
function applyTransportationTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).transportationPage;
  if (!d) return;

  document.title = d.title;

  setText("trTitle", d.h1);
  setText("trBullet1", d.b1);
  setText("trBullet2", d.b2);
  setText("trBullet3", d.b3);
  setText("trApplyBtn", d.apply);

  setText("trBus", d.bus);
  setText("trCoaster", d.coaster);
  setText("trMicrobus", d.microbus);
  setText("trTruck", d.truck);
  setText("trPickup", d.pickup);
  setText("trTrailerHead", d.trailerHead);
  setText("trTrailerTail", d.trailerTail);

  setText("trCalcHead", d.calcHead);
  setText("trLabelPrice", d.price);
  setText("trLabelDown", d.down);
  setText("trLabelYears", d.years);
  setText("trLabelInterest", d.interest);

  setText("trCalcBtnText", d.calcBtn);

  setText("trMonthlyLabel", d.monthly);
  setText("trLoanLabel", d.loan);
  setText("trInterestLabel", d.totalInterest);
}
function applyVanTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).vanPage;
  if (!d) return;

  document.title = d.title;

  setText("vanTitle", d.h1);
  setText("vanBullet1", d.b1);
  setText("vanBullet2", d.b2);
  setText("vanApplyBtn", d.apply);

  setText("vanSuzuki", d.suzuki);
  setText("vanChevrolet", d.chevrolet);
  setText("vanKyc", d.kyc);

  setText("vanCalcHead", d.calcHead);
  setText("vanLabelPrice", d.price);
  setText("vanLabelDown", d.down);
  setText("vanLabelYears", d.years);
  setText("vanLabelInterest", d.interest);

  setText("vanCalcBtnText", d.calcBtn);

  setText("vanMonthlyLabel", d.monthly);
  setText("vanLoanLabel", d.loan);
  setText("vanInterestLabel", d.totalInterest);
}
function applyCarsForSaleTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).carsForSalePage;
  if (!d) return;

  document.title = d.title;

  setText("cfsTitle", d.h1);
  setText("cfsSub", d.sub);
  setText("cfsResultsLabel", d.results);

  document.querySelectorAll(".cfsWhatsappBtn").forEach(el => {
    el.textContent = d.whatsapp;
  });

  document.querySelectorAll(".cfsCallBtn").forEach(el => {
    el.textContent = d.CALL;
  });

  setText("cfsFiltersTitle", d.filtersTitle);
  setText("cfsFiltersHint", d.filtersHint);

  // Brand / Model labels for custom dropdown
  setText("cfsBrandLabel", d.brand);
  setText("cfsModelLabel", d.model);

  // Old label if it still exists
  setText("cfsBrandModelLabel", d.brandModel);

  setText("cfsPriceLabel", d.cfsPriceLabel || d.price);
  setText("cfsKmLabel", d.km);
  setText("cfsYearLabel", d.year);
  setText("cfsTransLabel", d.transmission);
  setText("cfsFuelLabel", d.fuel);

  // placeholders
  setPlaceholder("brandInput", d.brandPh);
  setPlaceholder("cfsMinPrice", d.min);
  setPlaceholder("cfsMaxPrice", d.max);
  setPlaceholder("cfsMinKm", d.min);
  setPlaceholder("cfsMaxKm", d.max);
  setPlaceholder("cfsMinYear", d.min);
  setPlaceholder("cfsMaxYear", d.max);

  // actions
  setText("cfsResetBtn", d.reset);
  setText("cfsApplyBtn", d.apply);

  // empty state
  setText("cfsEmptyTitle", d.emptyTitle);
  setText("cfsEmptyDesc", d.emptyDesc);
  setText("cfsEmptyBack", d.back);

  // card labels
  setText("cfsWhatsappBtn", d.whatsapp);
  setText("cfsYearText", d.metaYear);
  setText("cfsKmText", d.metaKm);
  setText("cfsFuelText", d.metaFuel);
  setText("cfsTransText", d.metaTrans);

  document.querySelectorAll(".cfsTransItem").forEach(el => {
    const v = el.getAttribute("data-tr");
    if (lang === "ar") {
      if (v === "Automatic") el.textContent = "أوتوماتيك";
      if (v === "Manual") el.textContent = "يدوي";
      if (v === "Hybrid") el.textContent = "هجين";
    } else {
      el.textContent = v;
    }
  });

  document.querySelectorAll(".cfsFuelItem").forEach(el => {
    const v = el.getAttribute("data-fuel");
    if (lang === "ar") {
      if (v === "Benzine") el.textContent = "بنزين";
      if (v === "Electric") el.textContent = "كهرباء";
      if (v === "Diesel") el.textContent = "ديزل";
      if (v === "Natural gas") el.textContent = "غاز طبيعي";
      if (v === "Hybrid") el.textContent = "هجين";
    } else {
      el.textContent = v;
    }
  });

  // Translate Brand / Model custom dropdown options
  updateCarDropdownTranslations(lang);
}
function applyCarDetailsTranslation(lang) {
  const d = (TEXTS[lang] || TEXTS.en).carDetailsPage;
  if (!d) return;

  setText("carDWhatsappBtn", d.whatsapp);
  setText("carDCallBtn",d.CALL)
  setText("carDHighlightsTitle", d.highlights);
  setText("carDDetailsTitle", d.details);
  setText("carDDescTitle", d.description);

  setText("carDCondLabel", d.cond);
  setText("carDKmLabel", d.km);
  setText("carDYearLabel", d.year);
  setText("carDFuelLabel", d.fuel);
  setText("carDTransLabel", d.trans);

  setText("carDBrandKey", d.brand);
  setText("carDModelKey", d.model);
  setText("carDVersionKey", d.version);
  setText("carDPaymentKey", d.payment);
  setText("carDBodyKey", d.body);
  setText("carDAcKey", d.ac);
  setText("carDColorKey", d.color);
  setText("carDDoorsKey", d.doors);
  setText("carDInteriorKey", d.interior);

  setText("carDCalcHead", d.calcHead);
  setText("carDCalcPrice", d.price);
  setText("carDCalcDown", d.down);
  setText("carDCalcYears", d.years);
  setText("carDCalcInterest", d.interest);

  setText("carDCalcBtnText", d.calcBtn);

  setText("carDMonthlyLabel", d.monthly);
  setText("carDLoanLabel", d.loan);
  setText("carDTotalInterestLabel", d.totalInterest);

  setText("carDApplyNow", d.apply);
}
function applyAdminTranslation(lang) {
  setText("adminPriceLabel", lang === "ar" ? "السعر (ج.م)" : "Price (EGP)");
}
function toggleAllValues(lang){
  const showAr = (lang === 'ar');

  document.querySelectorAll('.valEn').forEach(el => {
    el.style.display = showAr ? 'none' : 'inline';
  });

  document.querySelectorAll('.valAr').forEach(el => {
    el.style.display = showAr ? 'inline' : 'none';
  });

  // desc
  const en = document.getElementById('descEn');
  const ar = document.getElementById('descAr');
  if (en && ar) {
    en.style.display = showAr ? 'none' : 'block';
    ar.style.display = showAr ? 'block' : 'none';
  }
}
function normalizeCarBrandName(brand) {
  if (!brand) return "";

  const clean = String(brand)
    .trim()
    .toLowerCase()
    .replace(/[-_]/g, " ")
    .replace(/\s+/g, " ");

  if (clean === "mercedes benz") return "Mercedes-Benz";
  if (clean === "xiaomi") return "Xiaomi";

  return brand;
}

function translateCarBrand(value, lang) {
  if (lang !== "ar") return value;

  const normalized = normalizeCarBrandName(value);

  return CAR_BRAND_AR[value] || CAR_BRAND_AR[normalized] || value;
}

function updateCarDropdownTranslations(lang) {
  const d = (TEXTS[lang] || TEXTS.en).carsForSalePage;

  const brandWrap = document.querySelector('[data-custom-select="brand"]');
  const modelWrap = document.querySelector('[data-custom-select="model"]');

  setText("cfsBrandLabel", d.brand);
  setText("cfsModelLabel", d.model);

  if (brandWrap) {
    const brandInput = brandWrap.querySelector("input[type='hidden']");
    const brandText = brandWrap.querySelector("[data-select-text]");

    brandWrap.querySelectorAll(".cfsNiceOption").forEach((btn) => {
      const value = btn.dataset.value || "";

      btn.textContent = value === ""
        ? d.allBrands
        : translateCarBrand(value, lang);
    });

    const selectedBrand = brandInput?.value || "";

    if (brandText) {
      brandText.textContent = selectedBrand
        ? translateCarBrand(selectedBrand, lang)
        : d.allBrands;
    }
  }

  if (modelWrap) {
    const modelInput = modelWrap.querySelector("input[type='hidden']");
    const modelText = modelWrap.querySelector("[data-select-text]");

    modelWrap.querySelectorAll(".cfsNiceOption").forEach((btn) => {
      const value = btn.dataset.value || "";
      btn.textContent = value === "" ? d.allModels : value;
    });

    const selectedModel = modelInput?.value || "";

    if (modelText) {
      modelText.textContent = selectedModel || d.allModels;
    }
  }
}
function setLanguage(lang) {
  localStorage.setItem(LANG_KEY, lang);
  applyNavTranslation(lang);
  applyHomeTranslation(lang);
  applyFooterTranslation(lang);
  applyAboutPageTranslation(lang);
  applyProductsPageTranslation(lang);
  applyAutomotivePageTranslation(lang);
  applyBrandNewCarsTranslation(lang);
  applyHomeFinishingTranslation(lang);
  applyGoldTranslation(lang);
  applyMortgageTranslation(lang);
  applySummerVehiclesTranslation(lang);
  applyInsuranceTranslation(lang);
  applyUsedCarsTranslation(lang);
  applyTransportationTranslation(lang);
  applyVanTranslation(lang);
  applyCarsForSaleTranslation(lang);
  applyCarDetailsTranslation(lang);
  toggleAllValues(lang);
  updateCarDropdownTranslations(lang);
}

document.addEventListener("DOMContentLoaded", () => {
  const current = localStorage.getItem(LANG_KEY) || "en";
  setLanguage(current);

  const btn = document.getElementById("langToggle");
  if (btn) {
    btn.addEventListener("click", () => {
      const next = (localStorage.getItem(LANG_KEY) === "ar") ? "en" : "ar";
      setLanguage(next);
    });
  }
});