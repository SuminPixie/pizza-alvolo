// ------------------ 메인 슬라이드 ------------------
const swiper1 = new Swiper(".slide__swiper", {
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  on: {
    init: updatePagination,
    slideChange: updatePagination,
  }
});

function updatePagination(swiper) {
  const current = swiper.realIndex + 1;
  const total = swiper.slides.length - document.querySelectorAll('.slide .swiper-slide-duplicate').length;
  document.querySelector(".slide .custom-pagination").textContent = `${current} / ${total}`;
}

// 재생/정지 토글
const playPauseBtn = document.querySelector(".slide .material-symbols-outlined");
let isPlaying = true;

playPauseBtn.addEventListener("click", () => {
  isPlaying ? swiper1.autoplay.stop() : swiper1.autoplay.start();
  playPauseBtn.textContent = isPlaying ? "play_arrow" : "pause";
  playPauseBtn.setAttribute("aria-label", isPlaying ? "재생" : "정지");
  isPlaying = !isPlaying;
});


// ------------------ 인기 메뉴 슬라이드 ------------------
const swiper2 = new Swiper(".best-menu__swiper", {
  slidesPerView: 4,
  spaceBetween: 60,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


// ------------------ 탑 버튼 ------------------
const t_btn = document.querySelector('.top-btn');

window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  t_btn.classList.toggle('act', scrollTop >= 900);
});


// ------------------ 헤더 높이 애니메이션 ------------------
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector("header");
  const gnb = document.querySelector(".gnb__menu");

  gnb.addEventListener("mouseenter", () => header.style.height = "400px");
  gnb.addEventListener("mouseleave", () => header.style.height = "120px");
});


// ------------------ GNB 메뉴 인디케이터 ------------------
$(function () {
  $(".gnb__menu > li").on("mouseenter", function () {
    const $link = $(this).find("a:first");
    $(".gnb__indicator").css({
      width: $link.outerWidth(),
      left: $link.position().left,
    });
  }).on("mouseleave", function () {
    $(".gnb__indicator").css({ width: 0 });
  });
});


// ------------------ 지역 선택기 (시/도 → 구/군) ------------------
$(function () {
  const $city = $("#city");
  const $district = $("#district");

  $.each(regionData, function (city, districts) {
    $city.append(new Option(city, city));
  });

  $city.on("change", function () {
    const selected = $(this).val();
    $district.empty().append(new Option("상세지역 선택", ""));
    if (selected && regionData[selected]) {
      regionData[selected].forEach(d =>
        $district.append(new Option(d, d))
      );
    }
  });
});
