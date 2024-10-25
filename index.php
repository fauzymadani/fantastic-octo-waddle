<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fauzy</title>
  <link rel="stylesheet" href="style.css">
  <script>
    function searchContent() {
      // Ambil input dari search bar
      const input = document.querySelector('.search-container input').value.toLowerCase();
      const items = document.querySelectorAll('.item');

      items.forEach(item => {
        const text = item.innerText.toLowerCase();

        // Cek apakah teks item mengandung input dari search bar
        if (text.includes(input)) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    }
  </script>
</head>

<body>
  <div class="navbar">
    <div class="logo">
      <img src="https://www.debian.org/logos/openlogo-nd.svg" alt="Debian Logo" width="50" height="50">
    </div>
    <ul class="nav-links">
      <li><a href="#">Blog</a></li>
      <li><a href="#">Micronews</a></li>
      <li><a href="packages.php">my Packages</a></li>
    </ul>
    <div class="search-container">
      <input type="text" placeholder="Search" oninput="searchContent()">
      <button onclick="searchContent()">Search</button>
    </div>
  </div>

  <div class="main-content" align="center">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2NNtDOYpsHAThbo21W_8oK-hSVWiLpWdTjA&s" alt="">
    <div class="text">
      <h1>Hello, visitor!</h1>
      <p>-----BEGIN PGP SIGNED MESSAGE-----<br>
        Hash: SHA512<br>

        that's not my photo. i'm Fauzy Madani by the way.<br>
        a hyper active and passionate Web developer from indonesia.<br>
        i know this is not a good website, but i like this style.<br>
        -----BEGIN PGP SIGNATURE-----<br>
        <br>
        iQIzBAEBCgAdFiEEZFSHdhPyF4ApFuH4L0pyCwpIvzwFAmcZ/SEACgkQL0pyCwpI<br>
        vzxtPA/+NInzySjxBYs7X2vHkKZRcqEsjSGmv26FPjkTZGU6ulQmlmmrXDsTnsDZ<br>
        0GbnIAZPxwR78KwLuNGl5kzUM7mhsTHpSj91KFJuSLlKJ6us1SnAx9thEFRwSkRH<br>
        vcW1S4K/EUkOSdOrZAOkaVZo+3z85A0wNF/Vq1iMYvj6oQnv5mtBxiMsag5wRxlq<br>
        y9ZDCHRNAOXqwY//9fMjjFh6JAmucdeMyqne/f505NmfQiCOOJGi4pOP5o3qWQvo<br>
        ssEXpNO4k+EmKYT/eeQnmllaFqFpqKkPe7n5GSuUv5QSicOekYS/8tC5upb98mMG<br>
        8k0srmN6yAcZNAURraTPtuXJEmuWb8lufVANtF9sq7txgR39A9/vUqHw0/XFMdeU<br>
        XYZBCfR5kmGG4GyoWkMam84/arg8NHFlxRkqpLS29i541M4XSDyqZVKACLzLvABF<br>
        tEgjL00MdPlM6q/LFwSuK+2+aYQVbbMny9P4QTSQ9RLxhj9tDUwxsCQPiYnLaKBT<br>
        Lnf+sAQvaJYGm29MQcj/kIr9IT+752C3HFVD1oBQw/+rFiLlCTBYP/eNDkNNGZ6n<br>
        rpDLO+ZmxNR5DSPgkwRaJQTlhrG0/hc1RLTLFFvet5fU83XP4JUePkxTKf4KTT75<br>
        NzU0FRgn178cjGBL602Bi3qVLh25PwlEqVdF5/JasclmKkd/vwc=<br>
        =3DmY<br>
        -----END PGP SIGNATURE-----<br>
      </p>
    </div>
  </div>

  <div class="container">
    <div class="column left-column">
      <div class="item" id="people">
        <div class="text">
          <h3><a href="#">People</a></h3>
          <p>Who we are and what we do</p>
        </div>
      </div>
      <div class="item" id="philosophy">
        <div class="text">
          <h3><a href="#">Our Philosophy</a></h3>
          <p>Why we do it, and how we do it</p>
        </div>
      </div>
      <div class="item" id="contribute">
        <div class="text">
          <h3><a href="#">Get Involved, Contribute</a></h3>
          <p>How you can join us!</p>
        </div>
      </div>
      <div class="item" id="more-left">
        <div class="text">
          <h3><a href="#">More...</a></h3>
          <p>Additional information about the Debian community</p>
        </div>
      </div>
    </div>

    <div class="column right-column">
      <div class="item" id="why-debian">
        <div class="text">
          <h3><a href="#">Why Debian</a></h3>
          <p>What makes Debian special</p>
        </div>
      </div>
      <div class="item" id="user-support">
        <div class="text">
          <h3><a href="#">User Support</a></h3>
          <p>Getting help and documentation</p>
        </div>
      </div>
      <div class="item" id="security-updates">
        <div class="text">
          <h3><a href="#">Security Updates</a></h3>
          <p>Debian Security Advisories (DSA)</p>
        </div>
      </div>
      <div class="item" id="more-right">
        <div class="text">
          <h3><a href="#">More...</a></h3>
          <p>Further links to downloads and software</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>