<?php
/**
 * Title: Property Search Bar
 * Slug: luxe-estate-pro/property-search-bar
 * Categories: luxe-estate-properties
 * Keywords: search, filter, properties, bar
 * Description: Horizontal property search bar with location, type, price, and beds filters.
 */
?>
<!-- wp:group {"style":{"color":{"background":"#FFFFFF"},"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="background:#FFFFFF;border-top:1px solid #E5E7EB;border-bottom:1px solid #E5E7EB">
  <div style="max-width:1200px;margin:0 auto;padding:0 2rem">
    <div style="display:grid;grid-template-columns:2fr 1fr 1fr 1fr auto;gap:0.75rem;align-items:end">
      <div>
        <label style="font-size:0.65rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#9CA3AF;display:block;margin-bottom:0.4rem">Location</label>
        <input type="text" placeholder="Neighborhood or ZIP..." style="width:100%;border:1px solid #E5E7EB;border-radius:6px;padding:0.75rem 1rem;font-size:0.88rem;color:#374151;outline:none;background:#FFFFFF;box-sizing:border-box" />
      </div>
      <div>
        <label style="font-size:0.65rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#9CA3AF;display:block;margin-bottom:0.4rem">Type</label>
        <select style="width:100%;border:1px solid #E5E7EB;border-radius:6px;padding:0.75rem 1rem;font-size:0.88rem;color:#374151;outline:none;background:#FFFFFF;box-sizing:border-box">
          <option>Any Type</option>
          <option>Estate</option>
          <option>Penthouse</option>
          <option>Condo</option>
          <option>Villa</option>
        </select>
      </div>
      <div>
        <label style="font-size:0.65rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#9CA3AF;display:block;margin-bottom:0.4rem">Price</label>
        <select style="width:100%;border:1px solid #E5E7EB;border-radius:6px;padding:0.75rem 1rem;font-size:0.88rem;color:#374151;outline:none;background:#FFFFFF;box-sizing:border-box">
          <option>Any Price</option>
          <option>$1M – $3M</option>
          <option>$3M – $5M</option>
          <option>$5M – $10M</option>
          <option>$10M+</option>
        </select>
      </div>
      <div>
        <label style="font-size:0.65rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:#9CA3AF;display:block;margin-bottom:0.4rem">Beds</label>
        <select style="width:100%;border:1px solid #E5E7EB;border-radius:6px;padding:0.75rem 1rem;font-size:0.88rem;color:#374151;outline:none;background:#FFFFFF;box-sizing:border-box">
          <option>Any</option>
          <option>3+</option>
          <option>4+</option>
          <option>5+</option>
          <option>6+</option>
        </select>
      </div>
      <button style="background:#0A1628;color:#FFFFFF;border:none;padding:0.75rem 2rem;border-radius:6px;font-size:0.82rem;font-weight:700;cursor:pointer;white-space:nowrap">Search</button>
    </div>
  </div>
</div>
<!-- /wp:group -->
