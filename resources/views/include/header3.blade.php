<!-- HEADER -->
<div class="header">
	<div>
		<span>
			<div class="srch">	
			</div>
		</span>
		<form action="/carianak" method="get">
			<input type="text" class="cari" name="search" placeholder="cari nama anak">
		</form>
		
	</div>
	
	<div class="dropdown" style="float: right; margin-right: 50px;">
	  <button class="dropbtn">Hi, {{$user}}!</button>
	  <div class="dropdown-content">
	    <a href="/profile">Profile</a>
	    <a href="/logout">Logout</a>
	  </div>
	</div>
	<a href="/" class="bar">Home</a>
	<a href="/generasibaru" class="bar">Tambah Generasi Baru</a>
</div>
<!-- END HEADER -->