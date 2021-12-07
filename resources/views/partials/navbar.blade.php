<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="aset/X1/Tropisianimal.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ? 'active' : '') }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentang" ? 'active' : '') }}" href="/tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Berita" ? 'active' : '') }}" href="/berita">Berita</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Galeri" ? 'active' : '') }}" href="/galeri">Galeri</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kontak" ? 'active' : '') }}" href="/kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>