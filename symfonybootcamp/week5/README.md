# Week5-EnesKilic

<h1>Repository Pattern</h1>

   Repository Design Pattern, veritabanı sorumluluğunu üstlenen sınıfı tasarlarken bir standart üzerine oturtmayı hedefleyen ve Entity Framework gibi ORM (Object Relational Mapping) araçlarıyla kombine edilerek sorgusal anlamda az sayıda operatif metotla yüksek seviyede veri erişim imkânı sağlayan bir strateji üzerine kurulu tasarım desenidir.

Veritabanı işlemlerinden insert, update ve delete gibi işlemler yaparken her tablo için ayrı ayrı metot ve kod yazmamız gerekebilir. Örnek olarak 25-30 tablo sayısından oluşan bir veritabanımız olsun, biz bu tabloların her biri için insert, update ve delete kodlarını yazmamız gerekiyor. Bu da bizim için kod karmaşıklığı ve fazla iş yükü demektir. Bu karmaşıklığı ortadan kaldırmak için Repository Pattern kullanmaktayız. Repository Pattern sayesinde kod karmaşıklığını ortadan kaldırırız, iş yükünü azaltırız ve hata payını en aza indirerek daha temiz kod yazabiliriz.

<h1>SQL Injection</h1>

  Sql injection özet olarak querystringler ile sorgulara müdahalede bulunup veritabanına erişerek veritabanındaki bilgileri görüntülemek şeklinde açıklanabilir. Örnek: OR '1'='1 

<h1>Man In The Middle</h1>

   Man in the middle saldırısı ağda, iki bağlantı arasındaki iletişimin dinlenmesi ile çeşitli verilerin ele geçirilmesi veya iletişimi dinlemekle kalmayıp her türlü değişikliğin yapılmasını da kapsayan bir saldırı yöntemidir.

<h1>XSS</h1>

   XSS (Cross Site Scripting) script kodları üzerinden (genelde javascript) bir web sayfasına saldırı yapılmasıdır.

<h1>Session Hijacking</h1>

   İki bilgisayar arasındaki geçerli TCP iletimini ele geçirme saldırısıdır.

<h1>CSRF</h1>

   Türkçe karşılığı ile Siteler Arası İstek Sahtekarlığı,  herhangi bir web uygulamasında oturum açmış bir kullanıcının oturumunu kullanarak kullanıcının istekleri dışında işlemler yapılmasıdır.
