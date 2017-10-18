## 改动日志
> 用于记录修改的地方，如数据库改动等，以便在服务器上同步

### 路径修改

* admin中base_url()需修改为公网ip及对应根目录
* home中删除base_url()即可

### 安全性改动

* 将application文件夹放到webroot目录外，并修改config文件