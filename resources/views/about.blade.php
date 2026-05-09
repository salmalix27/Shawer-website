<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Shawer</title>

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

@include('partials.navbar')

<!-- ================= ABOUT PAGE HEADER ================= -->
<main class="aboutPage">
  <div class="aboutWrap">

    <div class="aboutTop">
      <div class="aboutTop__left">
        <h1 class="aboutTitle" id="aboutPageTitle">
          About Shawer<br> 
        </h1>
      </div>

      <div class="aboutTop__right">
        <p class="aboutDesc" id="aboutPageDesc">
          Welcome to Shawer, a smart financing platform that connects you with all the finance providers in Egypt.
          We simplify the process and guide you step by step until your fund is approved.
        </p>
      </div>
    </div>

    <div class="aboutBanner">
      <img src="{{ asset('img/aboutUsPageHeader.png') }}" alt="About Shawer Banner">
    </div>

  </div>
</main>

<!-- ================= VISION & MISSION ================= -->
<section class="vmSection">
  <div class="aboutWrap">

    <div class="vmRow">
      <div class="vmText">
        <h2 class="vmTitle" id="visionTitle">Our Vision</h2>
        <p class="vmPara" id="visionPara">
          To be Egypt’s most trusted financial advisor and loan consultancy,
          known for simplifying finance and opening doors to opportunity for all.
        </p>
      </div>

      <div class="vmImage">
        <img src="{{ asset('img/ourVision.png') }}" alt="Our Vision">
      </div>
    </div>

    <div class="vmRow vmRow--reverse">
      <div class="vmText">
        <h2 class="vmTitle" id="missionTitle">Our Mission</h2>
        <p class="vmPara" id="missionPara">
          At Shawer, our mission is to simplify the financing journey by
          connecting individuals with banks, financing, and insurance providers.
          We guide our clients step by step, handle the complexity on their behalf,
          and help them secure the right solutions to turn their goals into reality
          with confidence.
        </p>
      </div>

      <div class="vmImage">
        <img src="{{ asset('img/ourMission.png') }}" alt="Our Mission">
      </div>
    </div>

  </div>
</section>

<!-- ================= PROVIDERS + SHOWROOMS (ONE IMAGE) ================= -->
<section class="psSection">
  <div class="aboutWrap psWrap">

    <h2 class="psMainTitle" id="providersTitle">Our Network</h2>

    <div class="psSlider">
      <div class="psTrack">
        <div class="psLogoItem"><img src="{{ asset('img/valu.png') }}" alt="Valu"></div>
        <div class="psLogoItem"><img src="{{ asset('img/drive.png') }}" alt="Drive Finance"></div>
        <div class="psLogoItem"><img src="{{ asset('img/EGbank.png') }}" alt="EGBANK"></div>
        <div class="psLogoItem"><img src="{{ asset('img/bankNXT.png') }}" alt="BANK NXT"></div>
        <div class="psLogoItem"><img src="{{ asset('img/capital.png') }}" alt="CI Capital"></div>
        <div class="psLogoItem"><img src="{{ asset('img/forsa.png') }}" alt="Forsa"></div>
        <div class="psLogoItem"><img src="{{ asset('img/ollin.png') }}" alt="Ollin"></div>
        <div class="psLogoItem"><img src="{{ asset('img/kfh.png') }}" alt="KFH"></div>
        <div class="psLogoItem"><img src="{{ asset('img/takka.png') }}" alt="Takka"></div>

        <!-- duplicate -->
        <div class="psLogoItem"><img src="{{ asset('img/valu.png') }}" alt="Valu"></div>
        <div class="psLogoItem"><img src="{{ asset('img/drive.png') }}" alt="Drive Finance"></div>
        <div class="psLogoItem"><img src="{{ asset('img/EGbank.png') }}" alt="EGBANK"></div>
        <div class="psLogoItem"><img src="{{ asset('img/bankNXT.png') }}" alt="BANK NXT"></div>
        <div class="psLogoItem"><img src="{{ asset('img/capital.png') }}" alt="CI Capital"></div>
        <div class="psLogoItem"><img src="{{ asset('img/forsa.png') }}" alt="Forsa"></div>
        <div class="psLogoItem"><img src="{{ asset('img/ollin.png') }}" alt="Ollin"></div>
        <div class="psLogoItem"><img src="{{ asset('img/kfh.png') }}" alt="KFH"></div>
        <div class="psLogoItem"><img src="{{ asset('img/takka.png') }}" alt="Takka"></div>
      </div>
    </div>

    <div class="psDots" aria-hidden="true">
      <span></span><span></span><span></span><span></span><span></span>
    </div>

    <h2 class="psMainTitle psSecondTitle" id="showroomsTitle">Our Partner Showrooms</h2>

    <div class="psSlider">
      <div class="psTrack psTrackReverse">
        <div class="psLogoItem psDark"><img src="{{ asset('img/legend.png') }}" alt="Legend Automotive"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/ellaithy.png') }}" alt="Ellaithy"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/zizo.png') }}" alt="Zizo Automotive"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/mtm.png') }}" alt="MTM Motors"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/st.png') }}" alt="S4MATIC"></div>
        <div class="psLogoItem"><img src="{{ asset('img/mh.png') }}" alt="Hussein Motors"></div>

        <!-- duplicate -->
        <div class="psLogoItem psDark"><img src="{{ asset('img/legend.png') }}" alt="Legend Automotive"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/ellaithy.png') }}" alt="Ellaithy"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/zizo.png') }}" alt="Zizo Automotive"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/mtm.png') }}" alt="MTM Motors"></div>
        <div class="psLogoItem psDark"><img src="{{ asset('img/st.png') }}" alt="S4MATIC"></div>
        <div class="psLogoItem"><img src="{{ asset('img/mh.png') }}" alt="Hussein Motors"></div>
      </div>
    </div>

    <div class="psDots" aria-hidden="true">
      <span></span><span></span><span></span><span></span><span></span>
    </div>

  </div>
</section>

 
 
<!-- ================= FOUNDER / CEO ================= -->
<section class="ceoSection">
  <div class="aboutWrap ceoGrid">

    <!-- Left text -->
    <div class="ceoText">
      <h2 class="ceoTitle" id="ceoTitle">Meet Our Founder &CEO</h2>

      <p class="ceoPara" id="ceoPara1">
      Is responsible for setting the company’s strategic vision, leading overall operations, and ensuring sustainable growth. The role focuses on building strong partnerships with financial institutions, overseeing executive decisions, and positioning the company as a trusted financial brokerage brand.
      </p>

    
    </div>

    <!-- Right card -->
    <article class="ceoCard teamCard">
      <img src="{{ asset('img/ahmed.png') }}" alt="Ahmed Gamal">

      <div class="teamOverlay">
        <div class="teamMeta">
          <h3 class="teamName">Ahmed Gamal</h3>
           
        </div>

        <p class="teamDesc" id="descAhmed">
          Responsible for setting the company's strategic vision, leading overall operations, and ensuring sustainable growth.
          Builds strong partnerships with financial institutions, oversees executive decisions, and positions Shawer as a trusted brand.
        </p>
      </div>
    </article>

  </div>
</section>

@include('partials.footer')

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>