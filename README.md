# Sample setup:
- run "php -S 0.0.0.0:8000 -t web"
- Acces http://localhost:8000/app_dev.php/demo/contact

#Tasks:
## 1) Change Contact form
- Add a drop down for "category" the contact form (standard values "Sales"/ "Technical Questions" / "Other"
 
## 2) Change Contact Storage
- Create a Doctrine Entity for contact requests
- Store contact requests into the database (/demo/contact)

## 3) Tests
- Write a test that verifies that contact requests are stored properly
- Think about other useful tests