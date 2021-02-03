


<footer class="footer">
    <div class="container-fluid">
    @auth( )
    <div class="d-flex justify-content-center">
        <div class="footer ">
            <a href="{{ route('home') }}">BackHome</a>
        </div>
        <div class="copyright mt-4 ml-1">
            &copy; {{ now()->year }} {{ __('made with') }} 
            <i class="tim-icons icon-heart-2"></i> {{ __('by') }}
            <small class="m-2">Group 4</small>
            <small>All Rights Reserved</small>
            
        </div>
    </div>

</div>
    @endauth()
    @guest()
    <div class="copyright text-center align-center">
            &copy; {{ now()->year }} {{ __('made with') }} 
            <i class="tim-icons icon-heart-2"></i> {{ __('by') }}
            <small class="m-2">Group 4</small>
            <small>All Rights Reserved </small>
            
        </div>
    </div>
    @endguest()
    
</footer>
