วิธีติดตั้งระบบ

สิ่งที่ต้องมีก่อนติดตั้งระบบ
1. ติดตั้ง composor
2. ติดตั้ง git
3. ติดตั้ง code editor (VS Code, Atom)
4. ติดตั้ง Xampp

วิธีติดตั้งระบบ เมื่อทำการติดตั้ง Environment ข้างต้นเรียบร้อย
1. Clone project มายังเครื่องที่ต้องการ Run
2. ทำการเปิด Project ด้วย Code Editor เพื่อแก้ไขไฟล์ต่างๆ
3. แก้ไข Config BaseUrl โดยไปที่ \app\Config\App.php  ให้ทำการกรอก host เป็น http://localhost:8081/ 
4. แก้ไข Config Database โดยไปที่ \app\Config\Database.php ให้ทำการแก้ไข ข้อมูลดังต่อไปนี้ 
   hostname => localhost 
   username => root    ** ตาม config การติดตั้ง Database
   password =>         ** ตาม config การติดตั้ง Database
   database =>codeigniter4_db

5. เปิดโปรแกรม Xampp ที่ติดตั้งไว้ จากนั้นคลิกปุ่ม Start Apache และ MySQL
6. import database ที่แนบไปกับ Project โดยมีวิธีการดังต่อไปนี้ ที่
    6.1 พิมพ์ localhost/phpmyadmin บน url address ใน Browser
    6.2 สร้าง Database ขึ้นมาเพื่อรองรับข้อมูลที่จะทำการ import เข้าไป
    6.3 คลิกที่เมนู import ด้านบน จากนั้นเลือกไฟล์ฐานข้อมูลที่แนบไป ชื่อ codeignier4_db.sql และทำการคลิกปุ่ม go เพื่อทำการ import
7. เปิดโปรแกรม Web Browser ขึ้นมาโดยพิมพ์ url ที่ url address เป็น localhost:8081  จากนั้นจะปรากฏหน้าตาระบบ
