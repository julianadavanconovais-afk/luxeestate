<?php
/**
 * Title: Property Card Grid
 * Slug: luxe-estate-pro/property-card-grid
 * Categories: luxe-estate-properties
 * Keywords: properties, grid, cards, listings
 * Description: 3-column property card grid with image placeholder, price, and details.
 */
?>
<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="background:#FFFFFF;padding-top:4rem;padding-bottom:4rem">
  <div style="max-width:1200px;margin:0 auto;padding:0 2rem">
    <div style="display:flex;justify-content:space-between;align-items:baseline;margin-bottom:2.5rem">
      <h2 style="font-family:var(--wp--preset--font-family--playfair);font-size:clamp(1.5rem,3vw,2.25rem);font-weight:700;color:#0A1628;margin:0">Featured Properties</h2>
      <a href="/properties" style="font-size:0.82rem;font-weight:700;color:#C9A84C;text-decoration:none;text-transform:uppercase;letter-spacing:0.1em">View All →</a>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem">

      <a href="/properties/star-island-villa" style="text-decoration:none;border:1px solid #E5E7EB;border-radius:10px;overflow:hidden;background:#FFFFFF">
        <div style="background:linear-gradient(135deg,#1E3A5F,#2C5282);height:220px;position:relative">
          <span style="position:absolute;top:0.75rem;left:0.75rem;background:#C9A84C;color:#0A1628;padding:0.2rem 0.6rem;font-size:0.62rem;font-weight:700;border-radius:20px">For Sale</span>
        </div>
        <div style="padding:1.5rem">
          <p style="font-size:0.62rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#C9A84C;margin-bottom:0.25rem">Waterfront Estate · Miami Beach</p>
          <h3 style="font-family:var(--wp--preset--font-family--playfair);font-size:1rem;font-weight:700;color:#0A1628;margin:0 0 0.5rem;line-height:1.3">1 Star Island Dr</h3>
          <p style="font-size:0.82rem;color:#9CA3AF;margin-bottom:0.75rem">8 bd · 9 ba · 12,400 sf</p>
          <p style="font-size:1.15rem;font-weight:700;color:#0A1628">$28,500,000</p>
        </div>
      </a>

      <a href="/properties/venetian-causeway" style="text-decoration:none;border:1px solid #E5E7EB;border-radius:10px;overflow:hidden;background:#FFFFFF">
        <div style="background:linear-gradient(135deg,#2C5282,#1E3A5F);height:220px;position:relative">
          <span style="position:absolute;top:0.75rem;left:0.75rem;background:#C9A84C;color:#0A1628;padding:0.2rem 0.6rem;font-size:0.62rem;font-weight:700;border-radius:20px">For Sale</span>
        </div>
        <div style="padding:1.5rem">
          <p style="font-size:0.62rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#C9A84C;margin-bottom:0.25rem">Waterfront Villa · Venetian Islands</p>
          <h3 style="font-family:var(--wp--preset--font-family--playfair);font-size:1rem;font-weight:700;color:#0A1628;margin:0 0 0.5rem;line-height:1.3">404 W Rivo Alto Dr</h3>
          <p style="font-size:0.82rem;color:#9CA3AF;margin-bottom:0.75rem">5 bd · 5 ba · 6,800 sf</p>
          <p style="font-size:1.15rem;font-weight:700;color:#0A1628">$9,750,000</p>
        </div>
      </a>

      <a href="/properties/coconut-grove-estate" style="text-decoration:none;border:1px solid #E5E7EB;border-radius:10px;overflow:hidden;background:#FFFFFF">
        <div style="background:linear-gradient(135deg,#0A1628,#1E3A5F);height:220px;position:relative">
          <span style="position:absolute;top:0.75rem;left:0.75rem;background:#C9A84C;color:#0A1628;padding:0.2rem 0.6rem;font-size:0.62rem;font-weight:700;border-radius:20px">For Sale</span>
        </div>
        <div style="padding:1.5rem">
          <p style="font-size:0.62rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#C9A84C;margin-bottom:0.25rem">Private Estate · Coconut Grove</p>
          <h3 style="font-family:var(--wp--preset--font-family--playfair);font-size:1rem;font-weight:700;color:#0A1628;margin:0 0 0.5rem;line-height:1.3">3290 Royal Rd</h3>
          <p style="font-size:0.82rem;color:#9CA3AF;margin-bottom:0.75rem">6 bd · 7 ba · 8,200 sf</p>
          <p style="font-size:1.15rem;font-weight:700;color:#0A1628">$14,200,000</p>
        </div>
      </a>

    </div>
  </div>
</div>
<!-- /wp:group -->
