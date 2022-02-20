@include('admin.layouts.header')

@include('admin.layouts.navbar')

@include('admin.layouts.aside')


<div class="content-wrapper">
    <section class="content">
        <div class="content-header"></div>
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
</div>

@include('admin.layouts.footer')