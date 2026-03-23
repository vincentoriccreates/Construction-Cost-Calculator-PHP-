# 🏗️ Construction Cost Calculator (PHP)

A modern **web-based construction cost calculator** built using **pure PHP, HTML, CSS, and JavaScript**.  
This project replicates an Excel-based computation system and converts it into an interactive web application.

---

## 🚀 Features

- 📊 Real-time cost computation (no page reload)
- 🧮 Excel-like calculation logic
- 🏠 Supports multiple **Structural Types**
- 🏗️ Dynamic **Construction Types with Unit Costs**
- 🧱 Component-based costing:
  - Porch
  - Roof Deck Penthouse
  - Basement
  - Mezzanine
  - Garage
  - And more...

- 📈 Automatic:
  - Total Construction Cost
  - Market Value
  - Assessment Level
  - Assessed Value
  - Taxable Value (2%)

- 📋 Formula Breakdown Viewer (like Excel)
- 📋 Copy-to-clipboard computation details
- 🎨 Modern UI (Bootstrap + custom styling)
- 📱 Fully responsive design

---

## 🧮 Calculation Logic

### Main Formula:
Main Cost = Area × Unit Cost

### Component Formula:
Component Cost = Area × Unit Cost × Percentage

### Assessment:
- Market Value = Rounded Total Cost
- Assessment Level = Based on property type bracket
- Assessed Value = Market Value × Assessment Level
- Taxable Value = Assessed Value × 2%
- Government = EXEMPT

---

## 🧱 Tech Stack

- PHP (Standalone)
- HTML5 / CSS3
- JavaScript (Vanilla)
- Bootstrap 5
- Google Fonts

No database required — all data is stored in PHP arrays.

---

## 📁 Project Structure

project-folder/
│── index.php   # Main application file

---

## ⚙️ Installation & Usage

1. Install XAMPP or any local server
2. Move the project folder to:
   C:\xampp\htdocs\
3. Start Apache in XAMPP
4. Open your browser and go to:
   http://localhost/your-folder-name/

---

## 🎯 How to Use

1. Select:
   - Structural Type
   - Type of Construction

2. Enter:
   - Main Floor Area

3. Add Components:
   - Select component
   - Input area
   - Percentage auto-fills

4. View:
   - Total Cost
   - Assessment Values
   - Formula Breakdown

---

## 🎨 UI Highlights

- Clean card-based layout
- Excel-inspired green theme
- Real-time updates
- Highlighted totals
- Interactive formula box

---

## 📌 Notes

- Unit costs are predefined based on construction type
- Some construction types may be disabled (N/A)
- Government properties are automatically tax exempt

---

## 👨‍💻 Author

Vincent Oric  
© 2026 All Rights Reserved  

---

## 🌐 License

This project is for educational and personal use.  
You may modify and improve it as needed.
