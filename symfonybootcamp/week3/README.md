# Week3
Soru 1
İçerisindeki geliştirme sürecini kolaylaştıran bileşenler vardır. Bu bileşenler ve paketler sayesinde mimarinizdeki katı bağlantıları ortadan kaldırmanıza yardımcı olur. . Ne kadar az bağlantı varsa, düzenleme yaptığınızda sistemin diğer bölümlerini bozma riski olmadan değişiklik yapmak o kadar kolay olacaktır. Bu sayede oldukça esnek bir şekilde yazılımlar oluşturabilirz.
Symfony MVC yapısı sayesinde ekip olarak projede çalışmayı, projede değişiklik yapmayı kolay hale getirir.
Arkasındaki sponsor şirket sayesinde sürekli güncel tutulup, en küçük hatalar giderilir.
Open Source olması sayesinde yazılımcılar tarafından sürekli geliştirilir.



Soru 2

Config/packages  içinde saklanan dosyalar symfony tarafından uygulama servislerini ayarlamak için kullanılır. Başka bir deyişle yüklenecek konfigrasyon dosyasını değiştirerek, uygulamanın davranışlarını değiştirebilirz. Symfony ortam ayarlamanın mantığı budur.
Symfony uygulaması 3 adet ortamla başlar. Yerel geliştirme için dev, üretim servisleri için prod ve otomatik testler için test. Uygulama başladığında symfony konfigrasyon dosyalarını aşağıdaki sırada yükler.

config/packages/*.yaml (and *.xml and *.php files too);
config/packages/<environment-name>/*.yaml (and *.xml and *.php files too);
config/services.yaml (and services.xml and services.php files too);
config/services_<environment-name>.yaml (and services_<environment-name>.xml and services_<environment-name>.php files too). 


Soru 3

composer create-project symfony/website-skeleton my_project_name


Soru 4

Symfony twig sistemini kullanır, Laravel blade sistemini kullanır.
Symfony veritabanı erişimi için doctrine kullanır, laravel veritabanı erişimi için eloquent kullanır.
Symfony, yeniden kullanılabilir bileşenlerden oluşan ince bir koleksiyonla birlikte gelen modüler bir yapının paketlenmiş formuna dayanmaktadır. Bu, bir web uygulaması geliştirirken daha iyi modülerlik sağlar.

Symfony Paketleri (FrameworkBundle, SecurityBundle, DebugBundle vb.), farklı uygulamalar arasında kod ve özellikleri paylaşmak için kullanılır.

Laravel'in mimarisi farklıdır. Web uygulamanızda hızlı değişiklikler yapmak istediğinizde daha kısıtlıdır. Dolayısıyla, uygulama modüllerindeki herhangi bir değişiklik, geliştiricilerin yalnızca o modülle değil, tüm kod birimiyle uğraşmaları gerektiği anlamına gelir.
