# ITP 404 Final Project - Groupon Search

My final project is a website that allows you to search for deals on groupon. Since many deals offered by groupon have an associated redemption location (especially getaways), I thought it would be convenient to plot the locations for these deals on a google map once the user specified a certain deal type and zip code to center his/her search around. 

## Project Requirements
1. **Created in Laravel MVC Framework:** yes
2. **One REST Web Service of Choice:** used the Groupon API
3. **Another Web Service:** Google Maps API
4. **AJAX using jQuery:** Used the $.ajax() method to create "quick links" for three cities on the front page. This allows a div to be filled with a list of deals without the entire page reloading.   
5. **jQuery Interactivity:** used jQuery to hide and show additional information for the list of deals on the results page. 

### Additional Elements
- **W3C geolocation API - I used the W3C geolocation API to determine a current latitude/longitude and plot this on the google map so that the user can see where deals are relative to the current position.
- **Laravel Data validation class:** I used Laravel's data validation class to make sure that the zip code was typed in, was exactly 5 characters long, and was numeric in the form page.
