		<main>
<!-- Hero -->
		
<div class="hero-home bg-mockup hero-bottom-border">
<div class="content">
 @if (session('status'))
    <script>
     function showModalPostRegister(){
    $('#modal-notification').modal('show');
    }
    </script>
    @else
    <script>
    function showModalPostRegister(){}
    </script>
     @endif
		<h1 class="animated-element">DESI GALLI</h1>
		<p class="animated-element">Taste the difference</p>
		<a href="/restaurant/{{ $restorant['subdomain'] }}" class="btn-1 medium animated-element">Order Now</a>
		<a href="#orderFood" class="mouse-frame nice-scroll">
		<div class="mouse"></div>
		</a>
		</div>
		</div>
		
	</main>
		<!-- Main End -->