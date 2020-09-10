# ci4-ligatcode
[![](https://badgen.net/badge/icon/Website?icon=chrome&label)](https://blog.simeedun.com)
[![](https://badgen.net/badge/license/MIT/blue)](https://github.com/irev/ci4-ligatcode/blob/master/LICENSE)
![](https://badgen.net/github/commits/irev/ci4-ligatcode)

### Codeigniter 4 CRUD Generator 1.0 (only Codeigniter 4)
About :
Codeigniter 4 CRUD Generator is a simple tool to automatically generate models, controllers and views from your tables. This tool is re-designed from the previous generator tool, Harviacode works for codeigniter 3. This tool will improve your writing code. This CRUD generator will perform complete CRUD operations, pagination, search, form *, ~~form validation, export to excel, and export to word~~. This CRUD generator uses bootstrap 4 style. You will still need to change the result code for more customization.

## TASK lISH :clock10:
- [x] CRUD Generator 
- [x] MODEL, VIEW, CONTROLER 
- [x] Tabel Paging 
- [ ] form validation
- [ ] \(Optional) export excel :soon:
- [ ] \(Optional) export word :soon:
- [ ] \(Optional) export pdf :soon:

#

* generate textarea and text input only
:fire: Codeigniter 4 CRUD Generator Please visit and like [blog.simeedun.com](blog.simeedun.com) for more info and PHP tutorials.
* :fire: Codeigniter 3 CRUD Generator Please visit and like [harviacode.com](harviacode.com) for more info and PHP tutorials.

## Preparation before using this Codeigniter 4 CRUD Generator (Important) :

On Controller `app/Controller/BaseController.php` , load `database library`, `session library` and `url helper`

```
protected $helpers = ['html','text','form','session'];
```

On file `.env` setting DATABASE, Find `CTR+F`


```
database.default.hostname = localhost
database.default.database = database
database.default.username = username
database.default.password = password
database.default.DBDriver = MySQLi
```

#### Using this CRUD Generator :

Simply put 'Ligatcode' folder,view folder, 'asset' folder and .htaccess file into your project root folder.
Open http://localhost/{yourprojectname}/ligatcode.
Select table and push generate button.
FAQ :

Select table show no data. Make sure you have correct database configuration on application/config/database.php and load database library on autoload.
Error chmod on mac and linux. Please change your application folder and harviacode folder chmod to 777
Error cannot Read, Update, Delete. Make sure your table have primary key.

#### Update Codeigniter 4 CRUD Generator

##### V.1.0 (meedun) - 30 August 2020
* Add the displayed database field selector
* construct (model, view and controller) for Codeigniter framework version 4.0.4
* Support custom page layout, built-in features of Codeigniter 4 This feature only affects the Generator button, ignored in Generate All button
#

`las't named \*harviacode\* to \*ligatcode\*`

@radenrap/aci-harviacode What do you think about these updates?

#
© 2020-2020 blog.simeedun.com
