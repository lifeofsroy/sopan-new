<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('storage') }}/{{ $setting->breadcrumb }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li class="active">{{ $link }}</li>
            </ul>
            <h2>{{ $title }}</h2>
        </div>
    </div>
</section>
