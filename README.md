# ci4-ligatcode


### Codeigniter 4 CRUD Generator 1.0 (only Codeigniter 4)
About :
Codeigniter 4 CRUD Generator is a simple tool to automatically generate models, controllers and views from your tables. This tool is re-designed from the previous generator tool, Harviacode works for codeigniter 3. This tool will improve your writing code. This CRUD generator will perform complete CRUD operations, pagination, search, form *, ~~form validation, export to excel, and export to word~~. This CRUD generator uses bootstrap 4 style. You will still need to change the result code for more customization.

## TASK lISH
- [x] CRUD Generator 
- [x] MODEL, VIEW, CONTROLER 
- [ ] form validation
- [ ] \(Optional) export excel
- [ ] \(Optional) export word
- [ ] \(Optional) export pdf

* generate textarea and text input only
Codeigniter 4 CRUD Generator Please visit and like [blog.simeedun.com](blog.simeedun.com) for more info and PHP tutorials.
* Codeigniter 3 CRUD Generator Please visit and like [harviacode.com](harviacode.com) for more info and PHP tutorials.

## Preparation before using this Codeigniter 4 CRUD Generator (Important) :

On Controller app/Controller/BaseController.php , load database library, session library and url helper
protected $helpers = ['html','text','form','session'];
On file .env, set :
Find CTR+F DATABASE
``
database.default.hostname = localhost
database.default.database = database
database.default.username = username
database.default.password = password
database.default.DBDriver = MySQLi
``

#### Using this CRUD Generator :

Simply put 'Ligatcode' folder,view folder, 'asset' folder and .htaccess file into your project root folder.
Open http://localhost/({yourprojectname}/ligatcode.
Select table and push generate button.
FAQ :

Select table show no data. Make sure you have correct database configuration on application/config/database.php and load database library on autoload.
Error chmod on mac and linux. Please change your application folder and harviacode folder chmod to 777
Error cannot Read, Update, Delete. Make sure your table have primary key.

#### Update Codeigniter 4 CRUD Generator

##### V.1.0 (meedun) - 30 August 2020
* Add the displayed database field selector
* construct (model, view and controller) for Codeigniter framework version 4.0.4
* Support custom page layout, built-in features of Codeigniter 4
This feature only affects the Generator button, ignored in Generate All button


© 2020-2020 blog.simeedun.com