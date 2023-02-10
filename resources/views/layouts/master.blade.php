<!DOCTYPE html>
<html lang="en">
     @include('layouts.head')
<body>
     <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
          @include('layouts.nav')
          @include('layouts.header')

          <main id="main-container">
               <div class="content">
                    @yield('content')
               </div>
          </main>
          @include('layouts.footer')
     </div>
     @include('layouts.js')
</body>
</html>