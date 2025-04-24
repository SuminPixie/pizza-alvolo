<!DOCTYPE html>
<html lang="ko">
<!-- head.php -->
<?php include('./inc/head.php'); ?>
<!-- main.css -->
<link rel="stylesheet" href="./css/main.css" />
<!-- Swiper -->
<link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- regionData.js -->
<script defer src="./script/regionData.js"></script>
<!-- main.js -->
<script defer src="./script/main.js"></script>
<body>
  <?php include('./inc/header.php'); ?>

  <main>
  <!-- 1. 메인 슬라이드 -->
  <section class="slide">
    <h2 class="hide">메인 슬라이드</h2>
    <div class="swiper slide__swiper">
      <div class="swiper-wrapper">
        <a href="javascript:void(0);" class="swiper-slide">
          <img src="./images/slide_1.png" alt="슬라이드 이미지 1">
          <div class="slide__text inner">
            <h3>
              나폴리맛피자<br>
              이름부터 맛있다.
            </h3>
            <p>20주년 한정판매 에디션</p>
          </div>
        </a>
        <a href="javascript:void(0);" class="swiper-slide">
          <img src="./images/slide_2.png" alt="슬라이드 이미지 2">
          <div class="slide__text inner">
            <h3>
              Best of Best<br>
              풍미가득한 피자
            </h3>
            <p>일주일 40% 할인</p>
          </div>
        </a>
        <a href="javascript:void(0);" class="swiper-slide">
          <img src="./images/slide_3.png" alt="슬라이드 이미지 3">
          <div class="slide__text inner">
            <h3 style="color: #111;">
              현대카드 70%<br>
              M포인트 사용
            </h3>
            <p style="color: #666;">총 금액 70% M포인트 사용혜택</p>
          </div>
        </a>
      </div>
      <div class="swiper-control">
        <span class="custom-pagination">1 / 3</span>
        <span class="material-symbols-outlined" aria-label="정지">pause</span>
      </div>
    </div>

    <!-- 피자여행 검색박스 -->
    <div class="search__box">
      <form class="search__form">
        <div class="search__content">
          <p>피자여행 어디로 갈까?</p>
          <p><span class="material-symbols-outlined">location_on</span>매장 찾기</p>
          <select name="city" id="city" class="search__city-box">
            <option value="">시/도 선택</option>
          </select>
          <select name="district" id="district" class="search__city-box">
            <option value="">상세지역 선택</option>
          </select>
          <button class="search__btn">검색하기</button>
        </div>
      </form>
    </div>
  </section>

  <!-- 2. 주문 섹션 -->
  <section class="order__section inner">
    <h2 class="hide">주문 바로가기</h2>
    <div class="order__icon">
      <a href="javascript:void(0);" title="배달주문">
        <img src="./images/order_1.png" alt="배달주문">
        <p>배달주문</p>
      </a>
    </div>
    <div class="line"></div>
    <div class="order__icon">
      <a href="javascript:void(0);" title="포장주문">
        <img src="./images/order_2.png" alt="포장주문">
        <p>포장주문</p>
      </a>
    </div>
    <div class="line"></div>
    <div class="order__icon">
      <a href="javascript:void(0);" title="마이오더">
        <img src="./images/order_3.png" alt="마이오더">
        <p>마이오더</p>
      </a>
    </div>
  </section>

  <!-- 3. 인기메뉴 -->
  <section class="best__section">
    <h2 class="best__title">베스트 인기메뉴</h2>
    <div class="best__menu swiper inner">
      <div class="swiper-wrapper">
        <?php for ($i = 1; $i <= 8; $i++): ?>
        <div class="swiper-slide">
          <a href="javascript:void(0);">            <img src="./images/best_<?= $i ?>.png" alt="인기메뉴 <?= $i ?>" class="pizza">
            <p>메뉴 <?= $i ?></p>
          </a>
        </div>
        <?php endfor; ?>
      </div>
      <div class="swiper-btn">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <!-- 4. 공지사항 & 제휴배너 -->
  <section class="notice__section inner">
    <h2 class="hide">공지사항과 제휴배너</h2>
    <div class="notice__box">
      <div class="notice__title">NOTICE</div>
      <span>
        <a href="javascript:void(0);"><img src="./images/icon_more.png" alt="더보기"></a>
      </span>
      <ul>
        <li>
          <a href="javascript:void(0);">피자알볼로 홈페이지 리뉴얼 안내</a>
          <span>2025.12.10</span>
        </li>
        <li>
          <a href="javascript:void(0);">신메뉴 출시 기념 이벤트 안내</a>
          <span>2025.11.01</span>
        </li>
        <li>
          <a href="javascript:void(0);">가맹점 모집 설명회</a>
          <span>2025.10.15</span>
        </li>
        <li>
          <a href="javascript:void(0);">배달 운영 관련 공지사항</a>
          <span>2025.10.15</span>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" class="banner__01">
      <img src="./images/banner_1.png" alt="제휴 배너 이미지">
    </a>
  </section>

  <!-- 5. 이벤트 -->
  <section class="event__section inner">
    <h2 class="event__head">EVENT</h2>
    <a href="javascript:void(0);">
      <span>자세히 보기</span>
    </a>
    <div class="event__total-box">
      <div class="event__box">
        <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="event__box-item">
          <div class="event__box-content">
            <div>
              <img src="./images/event_<?= $i ?>.png" alt="이벤트 이미지 <?= $i ?>">
            </div>
            <p class="event__on">진행중</p>
            <p class="event__title">이벤트 제목 <?= $i ?>입니다. 이 줄은 테스트 텍스트입니다.</p>
            <p class="event__period">2024.04.01 ~ 2024.04.30</p>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>
</main>
  <?php include('./inc/footer.php'); ?>
</body>
</html>
