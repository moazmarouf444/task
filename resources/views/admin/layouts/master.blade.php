@include('admin.includes.header')

@include('admin.includes.navbar')
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    @include('admin.includes.sidebar')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">

        @yield('content')

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
@include('admin.includes.footer')
