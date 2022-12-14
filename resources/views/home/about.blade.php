@extends('layout')

@section('content')
<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>information</h2>
            <p>Berikut ini adalah Data Pramuka di SMK Wikrama Bogor</p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Student</p>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Course</p>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Achievement</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Facts Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Skills</h2>
            <p>Skill yang akan di pelajari dalam pramuka dan Persentase ke aktifan setiap materi </p>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">Tali Temali <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Pertolongan Pertama <i class="val">85%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Pionering <i class="val">35%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill">Mores dan Semaphore <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Sandi Pramuka <i class="val">40%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Sejarah Pramuka Dunia dan Indonesia <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section><!-- End Skills Section -->
@endsection
