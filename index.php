<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>mehi</title>

    <!--  css -->
    <link rel="stylesheet" href="/css/index.css">
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>

</head>
<body>
<div class="common">
    <header class="main-header">
        <div class="max-conts">
            <div>
                <nav>
                    <h1><a href="/" class="logo-s">logo</a></h1>
                    <ul class="pc-conts">
                        <li><a href="/bbs/board.php?bo_table=free">자유게시판</a></li>
                        <li><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
                        <li><a href="/bbs/board.php?bo_table=qa">질문답변</a></li>
                    </ul>
                </nav>
            </div>
            <div class="gap-5">
                <div class="d-flex align-items-center gap-3">
                    <div class="form-search">
                        <button class="icon-bx search" data-bs-toggle="modal" data-bs-target="#searchModal"></button>
                    </div>
                </div>
                <div class="link-btn">
                <?php if ($is_member) {  ?>
                    <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
                    <a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
                    <?php if ($is_admin) {  ?>
                    <a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a>
                    <?php }
                     } else {  ?>
                    <a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a>
                    <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
                </div>
                <?php }  ?>
            </div>
        </div>
    </header>
    <!-- main-header Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen search-modal">
            <div class="modal-content ">
                <div class="max-conts">
                    <div class="modal-header">
                        <h1 class="logo-s"><a href="/">logo</a></h1>
                        <div class="flex-grow-1 form-search">
                            <label for="input01" class="hidden">검색어를 입력하세요</label>
                            <input type="text" id="input01" name="input01" placeholder="검색어를 입력하세요">
                            <button class="icon-bx"></button>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <main class="box-gap-5 flex-column">
        <section class="max-conts box-gap-5 flex-column">
            <section class="visual-banner">
                <div class="swiper mainBannerSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="banner-link">
                                <p class="banner-desc">
                                    <strong>0원 취업 지원 교육 모음</strong>
                                    <span>비전공, 경험, 경력 없는 취준생을 위한 2,000만원 상당의 취업 부트캠프</span>
                                </p>
                                <picture>
                                    <source srcset="/img/img_main_visuall_sample_mo.jpg"
                                            media="(max-width: 320px)">
                                    <img src="https://mehi.wtest.biz/uploads/20240724/20240724_020351_1865.jpg"
                                         alt="0원 취업 지원 교육 모음">
                                </picture>

                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="banner-link">
                                <p class="banner-desc">
                                    <strong>slide 2 </strong>
                                    <span>비전공, 경험, 경력 없는 취준생을 위한 2,000만원 상당의 취업 부트캠프</span>
                                </p>
                                <picture>
                                    <source srcset="/img/img_main_visuall_sample_mo.jpg"
                                            media="(max-width: 320px)">
                                    <img src="/img/img_main_visuall_sample.png" alt="0원 취업 지원 교육 모음">
                                </picture>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="banner-link">
                                <p class="banner-desc">
                                    <strong>slide 3</strong>
                                    <span>비전공, 경험, 경력 없는 취준생을 위한 2,000만원 상당의 취업 부트캠프</span>
                                </p>
                                <picture>
                                    <source srcset="/img/img_main_visuall_sample_mo.jpg"
                                            media="(max-width: 320px)">
                                    <img src="/img/img_main_visuall_sample.png" alt="0원 취업 지원 교육 모음">
                                </picture>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="banner-link">
                                <p class="banner-desc">
                                    <strong>slide 4</strong>
                                    <span>비전공, 경험, 경력 없는 취준생을 위한 2,000만원 상당의 취업 부트캠프</span>
                                </p>
                                <picture>
                                    <source srcset="/img/img_main_visuall_sample_mo.jpg"
                                            media="(max-width: 320px)">
                                    <img src="/img/img_main_visuall_sample.png" alt="0원 취업 지원 교육 모음">
                                </picture>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="banner-link">
                                <p class="banner-desc">
                                    <strong>slide 5</strong>
                                    <span>비전공, 경험, 경력 없는 취준생을 위한 2,000만원 상당의 취업 부트캠프</span>
                                </p>
                                <picture>
                                    <source srcset="/img/img_main_visuall_sample_mo.jpg"
                                            media="(max-width: 320px)">
                                    <img src="/img/img_main_visuall_sample.png" alt="0원 취업 지원 교육 모음">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </section>
            <section class="sec-01">
                <h3 class="tit-icon">자유게시판</h3>
                <div>
                    <div class="swiper buttonSwiper">
                        <div class="swiper-wrapper">
                        <?php

                            $sql = 'SELECT A.*, B.bf_file';
                            $sql .= ' FROM g5_write_free AS A';
                            $sql .= ' LEFT JOIN g5_board_file AS B ON A.wr_id = B.wr_id';
                            $sql .= ' WHERE A.wr_subject <> \'\'';
                            $sql .= ' ORDER BY wr_id DESC';
                            $result = sql_query($sql);

                            while ($row = sql_fetch_array($result))
                            {?>

                            <div class="swiper-slide">
                                <a href="#" class="banner-link">
                                    <div class="banner-conts">
                                        <!--                    <img class="thumb-img" src="/img/img_sub_banner_sample_01.png" alt="기업명">-->
                                        <img class="thumb-img"
                                            src="/data/file/free/<?php echo $row['bf_file'];?>"
                                            alt="기업명">
                                        <div class="banner-desc">
                                            <div class="banner-desc-top">
                                                <div class="logo-sq">
                                                    <img src="/data/file/free/<?php echo $row['bf_file'];?>" alt="로고">
                                                </div>
                                                <p class="company-info">
                                                    <span><?php echo $row['wr_subject'];?></span>
                                                    <strong><?php echo $row['wr_subject'];?></strong>
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </a>
                            </div>
                        <?php }?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </section>
            <section class="sec-02">
                <nav class="tag-tab">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-20">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-tab-01" data-bs-toggle="tab"
                                    data-bs-target="#tab-01"
                                    type="button" role="tab" aria-controls="tab-01" aria-selected="true"># 자유게시판
                            </button>
                            <button class="nav-link" id="nav-tab-02" data-bs-toggle="tab" data-bs-target="#tab-02"
                                    type="button"
                                    role="tab" aria-controls="tab-02" aria-selected="false"># 공지사항
                            </button>
                            <button class="nav-link" id="nav-tab-03" data-bs-toggle="tab" data-bs-target="#tab-03"
                                    type="button"
                                    role="tab" aria-controls="tab-03" aria-selected="false"># 질문답변
                            </button>
                        </div>
                        <a href="#" class="brd-btn">더 보기</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="tab-01" role="tabpanel" aria-labelledby="nav-tab-01"
                         tabindex="0">
                        <ul class="tag-list">
                        <?php

                        $sql = 'SELECT A.*, B.bf_file';
                        $sql .= ' FROM g5_write_free AS A';
                        $sql .= ' LEFT JOIN g5_board_file AS B ON A.wr_id = B.wr_id';
                        $sql .= ' WHERE A.wr_subject <> \'\'';
                        $sql .= ' ORDER BY wr_id DESC';
                        $result = sql_query($sql);

                        while ($row = sql_fetch_array($result))
                        {?>
                            <li>
                                <a href="#" class="tag-link">
                                    <div class="logo-rd">
                                        <img src="/data/file/free/<?php echo $row['bf_file'];?>" alt="CI">
                                    </div>
                                    <p class="tag-desc">
                                        <strong><?php echo $row['wr_subject'];?></strong>
                                        <span><?php echo $row['wr_subject'];?></span>
                                    </p>
                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab-02" role="tabpanel" aria-labelledby="nav-tab-02"
                         tabindex="0">
                        <ul class="tag-list">
                        <?php

                        $sql = 'SELECT A.*, B.bf_file';
                        $sql .= ' FROM g5_write_notice AS A';
                        $sql .= ' LEFT JOIN g5_board_file AS B ON A.wr_id = B.wr_id';
                        $sql .= ' WHERE A.wr_subject <> \'\'';
                        $sql .= ' ORDER BY wr_id DESC';
                        $result = sql_query($sql);

                        while ($row = sql_fetch_array($result))
                        {?>
                            <li>
                                <a href="#" class="tag-link">
                                    <div class="logo-rd">
                                        <img src="/data/file/notice/<?php echo $row['bf_file'];?>" alt="CI">
                                    </div>
                                    <p class="tag-desc">
                                        <strong><?php echo $row['wr_subject'];?></strong>
                                        <span><?php echo $row['wr_subject'];?></span>
                                    </p>
                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab-03" role="tabpanel" aria-labelledby="nav-tab-03"
                         tabindex="0">
                        <ul class="tag-list">
                        <?php

                        $sql = 'SELECT A.*, B.bf_file';
                        $sql .= ' FROM g5_write_qa AS A';
                        $sql .= ' LEFT JOIN g5_board_file AS B ON A.wr_id = B.wr_id';
                        $sql .= ' WHERE A.wr_subject <> \'\'';
                        $sql .= ' ORDER BY wr_id DESC';
                        $result = sql_query($sql);

                        while ($row = sql_fetch_array($result))
                        {?>
                            <li>
                                <a href="#" class="tag-link">
                                    <div class="logo-rd">
                                        <img src="/data/file/qa/<?php echo $row['bf_file'];?>" alt="CI">
                                    </div>
                                    <p class="tag-desc">
                                        <strong><?php echo $row['wr_subject'];?></strong>
                                        <span><?php echo $row['wr_subject'];?></span>
                                    </p>
                                </a>
                            </li>
                        <?php }?>
                        </ul>
                    </div>
                </div>
                <div></div>
            </section>
        </section>
        <section class="sec-03">
            <article class="max-conts">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <h3>자유게시판</h3>
                    <a href="#" class="brd-btn">더 보기</a>
                </div>
                <ul class="tag-list-02">
                <?php

                    $sql = 'SELECT A.*, B.bf_file';
                    $sql .= ' FROM g5_write_free AS A';
                    $sql .= ' LEFT JOIN g5_board_file AS B ON A.wr_id = B.wr_id';
                    $sql .= ' WHERE A.wr_subject <> \'\'';
                    $sql .= ' ORDER BY wr_id DESC';
                    $result = sql_query($sql);

                    while ($row = sql_fetch_array($result))
                    {?>
                    <li>
                        <a href="#" class="tag-link">
                            <div class="d-flex gap-20">
                                <div class="logo-rd">
                                    <img src="/data/file/free/<?php echo $row['bf_file'];?>" alt="CI">
                                </div>
                                <p class="tag-desc">
                                    <strong><?php echo $row['wr_subject'];?></strong>
                                    <span><?php echo $row['wr_content'];?></span>
                                </p>
                            </div>
                            <button class="subscribe-btn pink" data-bs-toggle="button" type="button">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" fill="white"/>
                                    <path
                                            d="M4.1665 6.5C4.1665 5.09987 4.1665 4.3998 4.43899 3.86502C4.67867 3.39462 5.06112 3.01217 5.53153 2.77248C6.06631 2.5 6.76637 2.5 8.1665 2.5H11.8332C13.2333 2.5 13.9334 2.5 14.4681 2.77248C14.9386 3.01217 15.321 3.39462 15.5607 3.86502C15.8332 4.3998 15.8332 5.09987 15.8332 6.5V17.5L9.99984 14.1667L4.1665 17.5V6.5Z"
                                            stroke="#FC6BB7" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                                구독
                            </button>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </article>

            <article class="max-conts">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <h3>공지사항</h3>
                    <a href="#" class="brd-btn">더 보기</a>
                </div>
                <ul class="tag-list-02">
                <?php

                $sql = 'SELECT A.*, B.bf_file';
                $sql .= ' FROM g5_write_notice AS A';
                $sql .= ' LEFT JOIN g5_board_file AS B ON A.wr_id = B.wr_id';
                $sql .= ' WHERE A.wr_subject <> \'\'';
                $sql .= ' ORDER BY wr_id DESC';
                $result = sql_query($sql);

                while ($row = sql_fetch_array($result))
                {?>
                <li>
                    <a href="#" class="tag-link">
                        <div class="d-flex gap-20">
                            <div class="logo-rd">
                                <img src="/data/file/notice/<?php echo $row['bf_file'];?>" alt="CI">
                            </div>
                            <p class="tag-desc">
                                <strong><?php echo $row['wr_subject'];?></strong>
                                <span><?php echo $row['wr_content'];?></span>
                            </p>
                        </div>
                        <button class="subscribe-btn pink" data-bs-toggle="button" type="button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" fill="white"/>
                                <path
                                        d="M4.1665 6.5C4.1665 5.09987 4.1665 4.3998 4.43899 3.86502C4.67867 3.39462 5.06112 3.01217 5.53153 2.77248C6.06631 2.5 6.76637 2.5 8.1665 2.5H11.8332C13.2333 2.5 13.9334 2.5 14.4681 2.77248C14.9386 3.01217 15.321 3.39462 15.5607 3.86502C15.8332 4.3998 15.8332 5.09987 15.8332 6.5V17.5L9.99984 14.1667L4.1665 17.5V6.5Z"
                                        stroke="#FC6BB7" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            구독
                        </button>
                    </a>
                </li>
                <?php }?>
                </ul>
            </article>
        </section>
        <section class="sec-04">
            <article class="max-conts">
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <h3 class="tit-icon">이런 포지션 어때요? 자유게시판</h3>
                    <a href="#" class="brd-btn">더 보기</a>
                </div>
                <ul class="tag-list-03">
                    <?php

                    $sql = 'SELECT A.*, B.bf_file';
                    $sql .= ' FROM g5_write_free AS A';
                    $sql .= ' LEFT JOIN g5_board_file AS B ON A.wr_id = B.wr_id';
                    $sql .= ' WHERE A.wr_subject <> \'\'';
                    $sql .= ' ORDER BY wr_id DESC';
                    $result = sql_query($sql);

                    while ($row = sql_fetch_array($result))
                    {?>
                    <li>
                        <a href="#" class="tag-link">
                            <div class="pos-thumb">
                                <img src="/data/file/free/<?php echo $row['bf_file'];?>" alt="<?php echo $row['wr_content'];?>">
                            </div>
                            <p class="tag-desc">
                                <strong class="ellipsis"><?php echo $row['wr_subject'];?></strong>
                                <span><?php echo $row['wr_content'];?></span>
                            </p>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </article>

        </section>
    </main>
    <footer>
        <div class="inner">
            <div class="d-flex justify-content-between flex-wrap gap-3">
                <div class="d-flex flex-column gap-20">
                    <div class="d-flex ft-menu">
                        <h2 class="logo">
                            <a href="javascript:void(0);">
                                <img src="..//img/bm_logo_x135.png" alt="mehi">
                            </a>
                        </h2>
                        <ul class="d-flex  align-items-center">
                            <li><a href="javascript:void(0);">기업소개</a></li>
                            <li><a href="javascript:void(0);">광고/제휴 문의</a></li>
                            <li><a href="javascript:void(0);">고객센터</a></li>
                            <li><a href="javascript:void(0);">이용약관</a></li>
                            <li><a href="javascript:void(0);">개인정보처리방침</a></li>
                        </ul>
                    </div>

                    <ul class="biz-info">
                        <li>(주)비엠더코리아</li>
                        <li>경기도 하남시 미사강변한강로 135, 다동 940호(망월동, 스카이폴리스)</li>
                        <li>(우편번호:12902)</li>
                        <li>TEL. 031-811-7384 / FAX. 031-811-7393</li>
                    </ul>
                </div>
                <ul class="d-flex cntc">
                    <li><a href="javascript:void(0);">CONTECT US</a></li>
                    <li><a href="javascript:void(0);">이메일 무단수집 거부</a></li>
                </ul>
            </div>
            <div></div>
        </div>
    </footer>

</div>
<script>

    $(document).ready(function () {

        $("button.menu-trigger").click(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            } else {
                $(this).addClass("active");
            }
        });

    });


    // main 상단 swiper
    var swiper = new Swiper(".mainBannerSwiper", {
        effect: 'fade',
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

    //채용공고 swiper
    var swiper = new Swiper(".buttonSwiper", {
        spaceBetween: 10,
        slidesPerView: 1.5,
        breakpoints: {
            960: {
                slidesPerView: 3,  //브라우저가 768보다 클 때
                spaceBetween: 30,
            },
            768: {
                slidesPerView: 2,  //브라우저가 768보다 클 때
                spaceBetween: 30,
            }
        },


        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


</script>
<script>
    function fsearchbox_submit(f)
    {
        var stx = f.stx.value.trim();
        if (stx.length < 2) {
            alert("검색어는 두글자 이상 입력하십시오.");
            f.stx.select();
            f.stx.focus();
            return false;
        }

        // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
        var cnt = 0;
        for (var i = 0; i < stx.length; i++) {
            if (stx.charAt(i) == ' ')
                cnt++;
        }

        if (cnt > 1) {
            alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
            f.stx.select();
            f.stx.focus();
            return false;
        }
        f.stx.value = stx;

        return true;
    }
    </script>
</body>
</html>
