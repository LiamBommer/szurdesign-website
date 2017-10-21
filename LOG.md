## 改动日志
> 用于记录修改的地方，如数据库改动等，以便在服务器上同步

### 路径修改

* 将 config/config.php 中 base_url() 改为： http://szurdesign.com/
* 修改 .htaccess 文件，修正路径

### 安全性改动

* 将application文件夹放到webroot目录外，并修改config文件