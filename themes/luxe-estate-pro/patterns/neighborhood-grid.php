<?php
/**
 * Title: Neighborhood Grid
 * Slug: luxe-estate-pro/neighborhood-grid
 * Categories: luxe-estate-content
 * Keywords: neighborhoods, areas, locations, grid
 * Description: 3-column neighborhood showcase grid with gradient overlays and listing counts.
 */
?>
<!-- wp:group {"style":{"color":{"background":"#0A1628"},"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="background:#0A1628;padding-top:5rem;padding-bottom:5rem">
  <div style="max-width:1200px;margin:0 auto;padding:0 2rem">
    <div style="text-align:center;margin-bottom:3rem">
      <p style="font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.2em;color:#C9A84C;margin-bottom:0.75rem">Explore by Area</p>
      <h2 style="font-family:var(--wp--preset--font-family--playfair);font-size:clamp(1.5rem,3vw,2.25rem);font-weight:700;color:#FFFFFF;margin:0">Miami's Most Coveted Neighborhoods</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem">

      <a href="/neighborhoods/miami-beach" style="text-decoration:none;border-radius:10px;overflow:hidden;position:relative;height:280px;display:block;background:linear-gradient(135deg,#1E3A5F,#2C5282)">
        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(10,22,40,0.85) 40%,transparent)"></div>
        <div style="position:absolute;bottom:1.5rem;left:1.5rem;right:1.5rem">
          <p style="font-size:0.62rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#C9A84C;margin-bottom:0.25rem">218 Listings</p>
          <h3 style="font-family:var(--wp--preset--font-family--playfair);font-size:1.15rem;font-weight:700;color:#FFFFFF;margin:0">Miami Beach</h3>
        </div>
      </a>

      <a href="/neighborhoods/coconut-grove" style="text-decoration:none;border-radius:10px;overflow:hidden;position:relative;height:280px;display:block;background:linear-gradient(135deg,#0A1628,#1E3A5F)">
        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(10,22,40,0.85) 40%,transparent)"></div>
        <div style="position:absolute;bottom:1.5rem;left:1.5rem;right:1.5rem">
          <p style="font-size:0.62rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#C9A84C;margin-bottom:0.25rem">94 Listings</p>
          <h3 style="font-family:var(--wp--preset--font-family--playfair);font-size:1.15rem;font-weight:700;color:#FFFFFF;margin:0">Coconut Grove</h3>
        </div>
      </a>

      <a href="/neighborhoods/brickell" style="text-decoration:none;border-radius:10px;overflow:hidden;position:relative;height:280px;display:block;background:linear-gradient(135deg,#2C5282,#112240)">
        <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(10,22,40,0.85) 40%,transparent)"></div>
        <div style="position:absolute;bottom:1.5rem;left:1.5rem;right:1.5rem">
          <p style="font-size:0.62rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#C9A84C;margin-bottom:0.25rem">187 Listings</p>
          <h3 style="font-family:var(--wp--preset--font-family--playfair);font-size:1.15rem;font-weight:700;color:#FFFFFF;margin:0">Brickell</h3>
        </div>
      </a>

    </div>
    <div style="text-align:center;margin-top:2.5rem">
      <a href="/neighborhoods" style="display:inline-block;background:transparent;color:#C9A84C;padding:0.875rem 2.5rem;font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.12em;text-decoration:none;border:1px solid rgba(201,168,76,0.3);border-radius:4px">View All Neighborhoods →</a>
    </div>
  </div>
</div>
<!-- /wp:group -->
