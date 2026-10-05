<?php

require_once "database.php";

/* =====================================
   DATA BERANDA
===================================== */

/* Jumlah publikasi */
$result_publikasi = mysqli_query(
    $conn,
    "SELECT COUNT(*) AS total FROM publikasi"
);

$data_publikasi = mysqli_fetch_assoc($result_publikasi);

/* 3 berita terbaru */
$query_berita = mysqli_query(
    $conn,
    "SELECT id, judul, kategori, tanggal, penulis, isi, gambar
     FROM publikasi
     ORDER BY tanggal DESC, id DESC
     LIMIT 3"
);

include "includes/header.php";

?>


<!-- =====================================
     HERO CAROUSEL BERANDA
===================================== -->

<section class="home-hero-carousel">

    <div
        id="bridaHomeCarousel"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="4500"
        data-bs-pause="false">

        <!-- ==============================
             SLIDE
        =============================== -->

        <div class="carousel-inner">


            <!-- SLIDE 1 -->

            <div class="carousel-item active">

                <div
                    class="home-hero-slide"
                    style="
                        background-image:
                        linear-gradient(
                            rgba(5, 38, 55, 0.72),
                            rgba(5, 38, 55, 0.72)
                        ),
                        url('assets/img/profil/brida.jpeg');
                    "
                >

                    <div class="container">

                        <div class="home-hero-content">

                            <span class="home-hero-badge">

                                Badan Riset dan Inovasi Daerah

                            </span>


                            <h1>

                                Riset & Inovasi untuk
                                Manggarai Barat
                                yang Semakin Mantap

                            </h1>


                            <p>

                                Portal informasi riset, kajian,
                                dan inovasi daerah Kabupaten
                                Manggarai Barat untuk mendukung
                                pembangunan berbasis pengetahuan
                                dan inovasi.

                            </p>


                            <div class="home-hero-buttons">

                                <a
                                    href="#riset"
                                    class="btn btn-primary-brida"
                                >

                                    <i class="bi bi-search"></i>

                                    Jelajahi Riset

                                </a>


                                <a
                                    href="#inovasi"
                                    class="btn btn-outline-brida"
                                >

                                    Lihat Inovasi

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- SLIDE 2 -->

            <div class="carousel-item">

                <div
                    class="home-hero-slide"
                    style="
                        background-image:
                        linear-gradient(
                            rgba(5, 38, 55, 0.72),
                            rgba(5, 38, 55, 0.72)
                        ),
                        url('assets/img/profil/brida(2).jpeg');
                    "
                >

                    <div class="container">

                        <div class="home-hero-content">

                            <span class="home-hero-badge">

                                RISET & KAJIAN

                            </span>


                            <h1>

                                Pengetahuan untuk
                                Pembangunan Daerah

                            </h1>


                            <p>

                                Menghadirkan hasil riset dan
                                kajian sebagai sumber pengetahuan
                                untuk mendukung pembangunan
                                Kabupaten Manggarai Barat.

                            </p>


                            <div class="home-hero-buttons">

                                <a
                                    href="pages/riset.php"
                                    class="btn btn-primary-brida"
                                >

                                    <i class="bi bi-journal-text"></i>

                                    Lihat Riset

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- SLIDE 3 -->

            <div class="carousel-item">

                <div
                    class="home-hero-slide"
                    style="
                        background-image:
                        linear-gradient(
                            rgba(5, 38, 55, 0.72),
                            rgba(5, 38, 55, 0.72)
                        ),
                        url('assets/img/profil/brida(3).jpeg');
                    "
                >

                    <div class="container">

                        <div class="home-hero-content">

                            <span class="home-hero-badge">

                                INOVASI DAERAH

                            </span>


                            <h1>

                                Inovasi untuk Mabar
                                Semakin Mantap

                            </h1>


                            <p>

                                Menampilkan berbagai inovasi
                                daerah yang dikembangkan untuk
                                meningkatkan kualitas pembangunan
                                dan pelayanan masyarakat.

                            </p>


                            <div class="home-hero-buttons">

                                <a
                                    href="pages/inovasi.php"
                                    class="btn btn-primary-brida"
                                >

                                    <i class="bi bi-lightbulb"></i>

                                    Lihat Inovasi

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- ==============================
             INDICATORS
        =============================== -->

        <div class="carousel-indicators home-hero-indicators">

            <button
                type="button"
                data-bs-target="#bridaHomeCarousel"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1">
            </button>


            <button
                type="button"
                data-bs-target="#bridaHomeCarousel"
                data-bs-slide-to="1"
                aria-label="Slide 2">
            </button>


            <button
                type="button"
                data-bs-target="#bridaHomeCarousel"
                data-bs-slide-to="2"
                aria-label="Slide 3">
            </button>

        </div>



        <!-- ==============================
             PREVIOUS
        =============================== -->

        <button
            class="carousel-control-prev home-hero-control"
            type="button"
            data-bs-target="#bridaHomeCarousel"
            data-bs-slide="prev"
        >

            <span
                class="carousel-control-prev-icon"
                aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Sebelumnya
            </span>

        </button>



        <!-- ==============================
             NEXT
        =============================== -->

        <button
            class="carousel-control-next home-hero-control"
            type="button"
            data-bs-target="#bridaHomeCarousel"
            data-bs-slide="next"
        >

            <span
                class="carousel-control-next-icon"
                aria-hidden="true">
            </span>

            <span class="visually-hidden">
                Berikutnya
            </span>

        </button>

    </div>

</section>


<!-- =====================================
     STATISTICS
===================================== -->

<section class="stats-section">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-3">

                <div class="stat-card">

                    <div class="stat-number">
                        <?php

                        $result = mysqli_query(
                            $conn,
                            "SELECT COUNT(*) AS total FROM riset"
                        );

                        $data = mysqli_fetch_assoc($result);

                        echo $data['total'];

                        ?>
                    </div>

                    <div class="stat-title">
                        Riset & Kajian
                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="stat-card">

                    <div class="stat-number">

                        <?php

                        $result = mysqli_query(
                            $conn,
                            "SELECT COUNT(*) AS total FROM inovasi"
                        );

                        $data = mysqli_fetch_assoc($result);

                        echo $data['total'];

                        ?>

                    </div>

                    <div class="stat-title">
                        Inovasi Daerah
                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="stat-card">

                    <div class="stat-number">
                        <?= $data_publikasi['total'] ?>
                    </div>

                    <div class="stat-title">
                        Publikasi
                    </div>

                </div>

            </div>


            <div class="col-md-3">

                <div class="stat-card">

                    <div class="stat-number">
                        8
                    </div>

                    <div class="stat-title">
                        OPD Mitra
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================
     RISET
===================================== -->

<section
    class="section-padding"
    id="riset">

    <div class="container">

        <div class="section-title">

            <span>
                Riset & Kajian
            </span>

            <h2>
                Riset Terbaru
            </h2>

            <p>
                Informasi hasil riset dan kajian yang
                mendukung pembangunan Kabupaten
                Manggarai Barat.
            </p>

        </div>


        <div class="row g-4">

            <?php

            $query = mysqli_query(
                $conn,
                "SELECT * FROM riset
                 ORDER BY tahun DESC
                 LIMIT 3"
            );

            while ($riset = mysqli_fetch_assoc($query)):

            ?>

            <div class="col-md-4">

                <div class="brida-card">

                    <div class="card-body-brida">

                        <span class="card-category">

                            <?= htmlspecialchars(
                                $riset['bidang']
                            ) ?>

                        </span>


                        <h3 class="card-title-brida">

                            <?= htmlspecialchars(
                                $riset['judul']
                            ) ?>

                        </h3>


                        <p class="card-text-brida">

                            <?= htmlspecialchars(
                                $riset['ringkasan']
                            ) ?>

                        </p>


                        <small class="text-muted">

                            Tahun:
                            <?= $riset['tahun'] ?>

                        </small>

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>


<!-- =====================================
     INOVASI
===================================== -->

<section
    class="section-padding inovasi-section"
    id="inovasi">

    <div class="container">

        <div class="section-title">

            <span>
                Inovasi Daerah
            </span>

            <h2>
                Inovasi Unggulan
            </h2>

            <p>
                Informasi inovasi daerah yang dikembangkan
                oleh perangkat daerah dan pemangku kepentingan.
            </p>

        </div>


        <div class="row g-4">

            <?php

            $query = mysqli_query(
                $conn,
                "SELECT * FROM inovasi
                 ORDER BY tahun DESC
                 LIMIT 3"
            );

            while ($inovasi = mysqli_fetch_assoc($query)):

            ?>

            <div class="col-md-4">

                <div class="brida-card">

                    <div class="card-body-brida">

                        <div class="inovasi-icon">

                            <i class="bi bi-lightbulb"></i>

                        </div>


                        <span class="card-category">

                            <?= htmlspecialchars(
                                $inovasi['kategori']
                            ) ?>

                        </span>


                        <h3 class="card-title-brida">

                            <?= htmlspecialchars(
                                $inovasi['nama_inovasi']
                            ) ?>

                        </h3>


                        <p class="card-text-brida">

                            <?= htmlspecialchars(
                                $inovasi['deskripsi']
                            ) ?>

                        </p>


                        <small class="text-muted">

                            <?= htmlspecialchars(
                                $inovasi['opd']
                            ) ?>

                        </small>

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>

<!-- =====================================
     BERITA TERBARU
===================================== -->

<section class="section-padding berita-section">

    <div class="container">

        <div class="section-title">

            <span>
                Informasi Terkini
            </span>

            <h2>
                Berita Terbaru
            </h2>

            <p>
                Informasi terbaru mengenai kegiatan,
                riset, kajian, dan inovasi daerah
                Kabupaten Manggarai Barat.
            </p>

        </div>


        <div class="row g-4">

            <?php if (
                $query_berita &&
                mysqli_num_rows($query_berita) > 0
            ): ?>

                <?php while (
                    $berita = mysqli_fetch_assoc($query_berita)
                ): ?>

                    <?php
                    /*
                     * File gambar dari database diarahkan ke:
                     * assets/images/publikasi/
                     *
                     * Contoh:
                     * database : publikasi-1.jpg
                     * file     : assets/images/publikasi/publikasi-1.jpg
                     */

                    $nama_gambar = trim(
                        (string) $berita['gambar']
                    );

                    $gambar = '';

                    if ($nama_gambar !== '') {
                        $gambar =
                            "uploads/publikasi/gambar/"
                            . basename($nama_gambar);
                    }
                    ?>

                    <div class="col-lg-4 col-md-6">

                        <article class="brida-card">

                            <!-- GAMBAR BERITA -->

                            <div class="berita-image-wrapper">

                                <?php if ($gambar !== ''): ?>

                                    <img
                                        src="<?= htmlspecialchars($gambar) ?>"
                                        class="berita-image"
                                        alt="<?= htmlspecialchars($berita['judul']) ?>"
                                        loading="lazy"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                                    <div
                                        class="berita-image-placeholder"
                                        style="display:none;">

                                        <i class="bi bi-newspaper"></i>

                                    </div>

                                <?php else: ?>

                                    <div class="berita-image-placeholder">

                                        <i class="bi bi-newspaper"></i>

                                    </div>

                                <?php endif; ?>

                            </div>


                            <div class="card-body-brida">

                                <!-- TANGGAL -->

                                <div class="berita-date">

                                    <i class="bi bi-calendar3"></i>

                                    <?= date(
                                        'd F Y',
                                        strtotime($berita['tanggal'])
                                    ) ?>

                                </div>


                                <!-- KATEGORI -->

                                <span class="card-category">

                                    <?= htmlspecialchars(
                                        $berita['kategori']
                                    ) ?>

                                </span>


                                <!-- JUDUL -->

                                <h3 class="berita-title">

                                    <?= htmlspecialchars(
                                        $berita['judul']
                                    ) ?>

                                </h3>


                                <!-- RINGKASAN -->

                                <p class="berita-excerpt">

                                    <?php
                                    $isi_berita = trim(
                                        strip_tags(
                                            $berita['isi']
                                        )
                                    );

                                    if (strlen($isi_berita) > 140) {
                                        echo htmlspecialchars(
                                            substr(
                                                $isi_berita,
                                                0,
                                                140
                                            )
                                        ) . '...';
                                    } else {
                                        echo htmlspecialchars(
                                            $isi_berita
                                        );
                                    }
                                    ?>

                                </p>


                                <!-- PENULIS -->

                                <?php if (
                                    !empty($berita['penulis'])
                                ): ?>

                                    <small class="text-muted d-block mb-3">

                                        <i class="bi bi-person-circle"></i>

                                        <?= htmlspecialchars(
                                            $berita['penulis']
                                        ) ?>

                                    </small>

                                <?php endif; ?>


                                <!-- DETAIL -->

                                <a
                                    href="pages/detail-publikasi.php?id=<?= (int) $berita['id'] ?>"
                                    class="btn-baca">

                                    Baca Selengkapnya

                                    <i class="bi bi-arrow-right"></i>

                                </a>

                            </div>

                        </article>

                    </div>

                <?php endwhile; ?>

            <?php else: ?>

                <div class="col-12">

                    <div class="home-news-empty">

                        <i class="bi bi-newspaper"></i>

                        <h3>
                            Belum Ada Berita
                        </h3>

                        <p>
                            Informasi terbaru BRIDA
                            akan ditampilkan di sini.
                        </p>

                    </div>

                </div>

            <?php endif; ?>

        </div>


        <!-- TOMBOL LIHAT SEMUA -->

        <div class="text-center mt-5">

            <a
                href="pages/publikasi.php"
                class="btn btn-primary-brida">

                Lihat Semua Berita

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

</section>
<style>
/* =====================================
   BERITA BERANDA - PERAPIAN GAMBAR
===================================== */

.berita-image-wrapper {
    width: 100%;
    height: 220px;
    overflow: hidden;
    background: #e2e8f0;
}

.berita-image-wrapper .berita-image {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

.berita-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #dbeafe, #ccfbf1);
    color: #0f766e;
}

.berita-image-placeholder i {
    font-size: 55px;
    opacity: .65;
}

.home-news-empty {
    text-align: center;
    padding: 60px 30px;
    background: #fff;
    border-radius: 16px;
    border: 1px dashed #cbd5e1;
}

.home-news-empty > i {
    display: block;
    font-size: 50px;
    color: #94a3b8;
    margin-bottom: 15px;
}

.home-news-empty h3 {
    color: #334155;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 8px;
}

.home-news-empty p {
    color: #64748b;
    margin: 0;
}

@media (max-width: 768px) {
    .berita-image-wrapper {
        height: 200px;
    }
}
</style>
<style>

/* =====================================================
   HERO CAROUSEL BERANDA BRIDA
===================================================== */

.home-hero-carousel {
    position: relative;
    width: 100%;
    overflow: hidden;
}


/* ==============================
   SLIDE
============================== */

.home-hero-slide {

    min-height: 520px;

    width: 100%;

    background-size: cover;

    background-position: center;

    background-repeat: no-repeat;

    display: flex;

    align-items: center;

    position: relative;

}


/* ==============================
   CONTENT
============================== */

.home-hero-content {

    max-width: 760px;

    padding-top: 70px;

    padding-bottom: 90px;

    color: #ffffff;

}


/* ==============================
   BADGE
============================== */

.home-hero-badge {

    display: inline-block;

    padding: 10px 18px;

    margin-bottom: 22px;

    border: 1px solid rgba(255,255,255,.45);

    border-radius: 30px;

    background: rgba(255,255,255,.10);

    color: #ffffff;

    font-size: 14px;

    font-weight: 600;

    letter-spacing: .3px;

    backdrop-filter: blur(4px);

}


/* ==============================
   JUDUL
============================== */

.home-hero-content h1 {

    margin: 0 0 20px;

    max-width: 800px;

    color: #ffffff;

    font-size: clamp(38px, 5vw, 68px);

    line-height: 1.08;

    font-weight: 800;

    letter-spacing: -1.5px;

}


/* ==============================
   DESKRIPSI
============================== */

.home-hero-content p {

    max-width: 680px;

    margin: 0 0 28px;

    color: rgba(255,255,255,.88);

    font-size: 17px;

    line-height: 1.75;

}


/* ==============================
   BUTTON
============================== */

.home-hero-buttons {

    display: flex;

    align-items: center;

    gap: 12px;

    flex-wrap: wrap;

}


/* ==============================
   CAROUSEL INDICATOR
============================== */

.home-hero-indicators {

    position: absolute;

    bottom: 25px;

    left: 0;

    right: 0;

    margin: 0;

    z-index: 5;

}


.home-hero-indicators button {

    width: 35px;

    height: 4px;

    margin: 0 4px;

    border: 0;

    border-radius: 5px;

    background-color: rgba(255,255,255,.55);

}


.home-hero-indicators button.active {

    width: 45px;

    background-color: #ffffff;

}


/* ==============================
   CONTROL
============================== */

.home-hero-control {

    width: 65px;

    opacity: 0;

    transition: .3s ease;

}


.home-hero-carousel:hover .home-hero-control {

    opacity: .8;

}


/* ==============================
   ANIMASI FADE
============================== */

.home-hero-carousel .carousel-item {

    transition: opacity .8s ease-in-out;

}


/* ==============================
   MOBILE
============================== */

@media (max-width: 768px) {

    .home-hero-slide {

        min-height: 520px;

        background-position: center;

    }


    .home-hero-content {

        padding: 55px 20px 80px;

    }


    .home-hero-content h1 {

        font-size: 40px;

        line-height: 1.1;

        letter-spacing: -.5px;

    }


    .home-hero-content p {

        font-size: 15px;

        line-height: 1.65;

    }


    .home-hero-badge {

        font-size: 12px;

        padding: 8px 14px;

    }


    .home-hero-control {

        display: none;

    }

}


/* ==============================
   HP KECIL
============================== */

@media (max-width: 480px) {

    .home-hero-slide {

        min-height: 500px;

    }


    .home-hero-content {

        padding-left: 18px;

        padding-right: 18px;

    }


    .home-hero-content h1 {

        font-size: 34px;

    }


    .home-hero-content p {

        font-size: 14px;

    }

}

</style>

<!-- =====================================
     FOOTER
===================================== -->

<?php

include "includes/footer.php";

?>