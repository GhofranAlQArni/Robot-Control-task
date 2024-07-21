# Robot-Control-task

for view : https://codepen.io/GhofranAlQArni/pen/GRbJbWj


# OUTPUT 
![control panel](https://github.com/user-attachments/assets/0851c378-60b5-42ed-b74e-62a6a607a824)


# Robot Control Panel Design Explanation
HTML Structure
The HTML structure starts with the <!DOCTYPE html> declaration to define the document type and HTML version. The head section includes meta tags for character encoding and the title of the page. The style section within the head contains CSS styles that define the appearance of various elements on the page.

html

<html>
<head>
  <meta charset="utf-8">
  <title>ROBOT Control Panel</title>
</head>
CSS Styling
The style block defines the CSS for the entire page, including the background color, text alignment, and button styles.

Body Styling:

css

body {
  background-color: #41627E;
  text-align: center;
}
The body element is styled with a background color of #41627E and centered text.

Header Styling:

css

h3 {
  font-family: 'Lato', sans-serif;
  margin: auto;
  width: 400px;
  color: white;
  font-size: 3em;
  font-weight: 300;
  letter-spacing: 0.1em;
}
The h3 element is styled to have a specific font, color, size, and weight, providing a modern and clean appearance.

Button Styling:

css

.button {
  border-radius: 100%;
  background-color: #7D2252;
  color: white;
  border: none;
  outline: 2px;
  padding: 7%;
  margin: 1%;
  font-size: 150%;
  transition-duration: 0.5s;
  cursor: pointer;
  display: inline;
  box-shadow: 3px 3px 7px #333;
}

.button:hover {
  background-color: #41627E;
  color: white;
  transform: scale(1.1);
}
Buttons are given a circular shape with a background color of #7D2252. They change color and slightly increase in size when hovered over, thanks to the transition effect.

# Layout and Sections
The main content is enclosed within a div with the class hole. It includes sections for the logo, title, and control buttons.

html

<div class="hole">
  <section>
    <img src="https://s-m.com.sa/images/logo.png" alt="no image">
    <h3>Robot control panel</h3>
  </section>
The middle class is used to center and style the control buttons, while the footer class contains the author's name.

html

<div class="middle">
  <section>
    <button class="button button1">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/></svg>
    </button>
  </section>
  <!-- Additional button sections -->
</div>
<div class="footer">
  <p>By Ghofran AlQarni</p>
</div>


# Specific Code Explanations
Button Hover Effect:
The hover effect for buttons changes the background color and scales the button up slightly to give a dynamic, interactive feel.

css

.button:hover {
  background-color: #41627E;
  color: white;
  transform: scale(1.1);
}
Button SVG Transformations:
Different button classes (button1, button2, etc.) apply specific rotations to the SVG elements, which visually indicate different directions for control (e.g., left, right, up, down).

css

.button1 svg {
  transform: rotate(-90deg);
}
.button2 svg {
  transform: rotate(-180deg);
}
.button4 svg {
  transform: rotate(0deg);
}
.button5 svg {
  transform: rotate(90deg);
}


# DATA BASE :

<img width="1079" alt="image" src="https://github.com/user-attachments/assets/5f63ca0c-3f7f-4e5d-88c1-5b538abe956a">

This design ensures a visually appealing and user-friendly control panel for robot operations, with clear button functionalities and responsive interactions.
