# Albion Price Calculator

## Project Description

The "Albion Price Calculator" is a web application designed to assist Albion Online players in obtaining information about the prices of various in-game items across different cities. The application allows users to select an item, specify its quality, tier, and enchantment, and then queries the Albion Online API to retrieve data on buying and selling prices in various cities.

For other languages:
- Para obtener la documentación en español, consulte [README ESPAÑOL](README_SPANISH.md).
- Para a documentação em português, consulte [README PORTUGUÊS](Readme_Portuguese.md).

## Project Structure

The project is organized as follows:

- **index.php**: Main file containing the HTML structure of the application, user interface elements, and inclusion of necessary JS and PHP files.

- **data/options.php**: PHP file including data from different categories such as clothing, offhands, consumables, capes, and artifacts.

- **assets/js/Main.js**: JavaScript file handling the core logic of the application, including querying data from the Albion Online API and presenting results.

- **assets/js/UTC_Time.js**: JavaScript file updating and displaying UTC time in the user interface.

- **assets/js/darkMode.js**: JavaScript file implementing dark mode functionality and saving user preference in local storage.

## Using the Application

1. **Getting Started**: Open the `index.php` file in a web browser to start the application.

2. **Item Selection**: Use the dropdown menu to select an item of interest.

3. **Detailed Configuration**: Choose the tier, quality, and enchantment of the item for more accurate results.

4. **Price Query**: Click the "Check Prices" button to retrieve information about prices in different cities.

5. **Visual Results**: Results will be displayed in the interface, including minimum and maximum price for sale and purchase in each city.

6. **Dark Mode**: You can toggle dark mode by clicking the button with the moon icon.

## Recommendations and Tips

- **Automatic Update**: UTC time is automatically updated every second to keep you informed.

- **Visual Charts**: A visual chart displaying minimum and maximum sale prices per city is included.

- **Dark Mode Persistence**: Your dark mode preference is saved locally to persist even after closing and reopening the application.

## Important Notices

- **Real-time Data**: The application relies on the [Albion Data Project](https://www.albion-online-data.com/) API and requires an internet connection to fetch updated data.

- **Enchantment Format**: Enchantments are indicated with a number, e.g., "Enchantment 1". Make sure to select the correct enchantment.




