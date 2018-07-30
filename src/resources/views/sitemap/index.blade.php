<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($routes as $route)
   <url>
      <loc>{{ route($route) }}</loc>
   </url>
@endforeach
@foreach($agencies as $agencies)
   <url>
      <loc>{{ route('agencies.show', ['agency' => $agency->slug]) }}</loc>
   </url>
@endforeach
@foreach($paths as $path)
   <url>
      <loc>{{ route('paths.show', ['path' => $path->slug]) }}</loc>
   </url>
@endforeach
@foreach($locations as $location)
   <url>
      <loc>{{ route('locations.show', ['location' => $location->slug]) }}</loc>
   </url>
@endforeach
@foreach($careers as $career)
   <url>
      <loc>{{ route('careers.show', ['career' => $career->slug]) }}</loc>
   </url>
@endforeach
@foreach($plans as $plan)
   <url>
      <loc>{{ route('plans.show', ['plan' => $plan->slug]) }}</loc>
   </url>
@endforeach
@foreach($schedules as $schedule)
   <url>
      <loc>{{ route('schedules.show', ['schedule' => $schedule->slug]) }}</loc>
   </url>
@endforeach
@foreach($clearances as $clearance)
   <url>
      <loc>{{ route('clearances.show', ['clearance' => $clearance->slug]) }}</loc>
   </url>
@endforeach
@foreach($travels as $travel)
   <url>
      <loc>{{ route('travels.show', ['travel' => $travel->slug]) }}</loc>
   </url>
@endforeach
@foreach($listings as $listing)
   <url>
      <loc>{{ route('listings.show', ['listing' => $listing->slug]) }}</loc>
   </url>
@endforeach
</urlset> 