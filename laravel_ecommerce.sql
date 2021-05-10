create table kategori
(
    id           int unsigned auto_increment
        primary key,
    ust_id       int         null,
    kategori_adi varchar(30) not null,
    slug         varchar(40) not null,
    created_at   timestamp   null,
    updated_at   timestamp   null,
    deleted_at   timestamp   null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (1, null, 'Saksı Çiçekleri', 'saksicicekleri', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (2, 1, 'Antoryum', 'antoryum', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (3, 1, 'Atatürk Çiçeği', 'ataturkcicegi', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (4, 1, 'Guzmanya', 'guzmanya', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (5, 1, 'Kalanchoe', 'kalanchoe', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (6, null, 'Gül', 'gul', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (7, 6, 'Kırmızı Gül', 'kirmizigul', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (8, 6, 'Kutuda Güller', 'kutudagul', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (9, 6, 'Gül Buketleri', 'gulbuketleri', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (10, 6, 'Solmayan Gül', 'solmayangul', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (11, null, 'Orkide', 'orkide', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (12, 11, 'Beyaz Orkide', 'beyazorkide', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (13, 11, 'Mor Orkide', 'mororkide', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (14, 11, 'Mini Orkide', 'miniorkide', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (15, null, 'Teraryum', 'teraryum', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (16, null, 'Lilyum & Zambak', 'lilyumzambak', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (17, null, 'Via Bonte', 'viabonte', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (18, null, 'Sukulent', 'sukulent', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (19, null, 'Ferforje', 'ferforje', null, null, null);
INSERT INTO laravel_ecommerce.kategori (id, ust_id, kategori_adi, slug, created_at, updated_at, deleted_at) VALUES (20, 16, 'Lilyum', 'lilyum', '2021-05-09 12:33:00', '2021-05-09 12:33:00', null);

create table kategori_urun
(
    id          int unsigned auto_increment
        primary key,
    kategori_id int unsigned not null,
    urun_id     int unsigned not null,
    constraint kategori_urun_kategori_id_foreign
        foreign key (kategori_id) references kategori (id)
            on delete cascade,
    constraint kategori_urun_urun_id_foreign
        foreign key (urun_id) references urun (id)
            on delete cascade
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (1, 6, 1);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (2, 6, 2);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (3, 6, 3);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (4, 6, 4);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (5, 7, 1);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (6, 7, 2);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (7, 7, 3);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (8, 7, 4);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (9, 6, 5);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (10, 6, 6);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (11, 6, 7);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (12, 6, 8);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (13, 8, 5);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (14, 8, 6);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (15, 8, 7);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (16, 8, 8);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (17, 6, 9);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (18, 6, 10);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (19, 9, 9);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (20, 9, 10);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (21, 6, 11);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (22, 6, 12);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (23, 10, 11);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (24, 10, 12);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (25, 1, 13);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (26, 1, 14);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (27, 2, 13);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (28, 2, 14);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (29, 1, 15);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (30, 1, 16);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (31, 3, 15);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (32, 3, 16);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (33, 1, 17);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (34, 1, 18);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (35, 4, 17);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (36, 4, 18);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (37, 1, 19);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (38, 1, 20);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (39, 5, 19);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (40, 5, 20);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (41, 11, 21);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (42, 11, 22);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (43, 13, 21);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (44, 13, 22);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (45, 11, 23);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (46, 11, 24);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (47, 12, 23);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (48, 12, 24);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (49, 11, 25);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (50, 11, 26);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (51, 14, 25);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (52, 14, 26);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (53, 15, 27);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (54, 15, 28);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (55, 15, 29);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (56, 16, 30);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (57, 16, 31);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (58, 16, 32);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (59, 17, 33);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (60, 17, 34);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (61, 17, 35);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (62, 18, 36);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (63, 18, 37);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (64, 18, 38);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (65, 19, 39);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (66, 19, 40);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (67, 19, 41);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (69, 20, 30);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (70, 20, 31);
INSERT INTO laravel_ecommerce.kategori_urun (id, kategori_id, urun_id) VALUES (71, 20, 32);

create table kullanici
(
    id                  int unsigned auto_increment
        primary key,
    adsoyad             varchar(60)          not null,
    email               varchar(150)         not null,
    sifre               varchar(60)          not null,
    aktivasyon_anahtari varchar(60)          null,
    aktif_mi            tinyint(1) default 0 not null,
    yonetici_mi         tinyint(1) default 0 null,
    remember_token      varchar(100)         null,
    created_at          timestamp            null,
    updated_at          timestamp            null,
    deleted_at          timestamp            null,
    constraint kullanici_email_unique
        unique (email)
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.kullanici (id, adsoyad, email, sifre, aktivasyon_anahtari, aktif_mi, yonetici_mi, remember_token, created_at, updated_at, deleted_at) VALUES (1, 'Elif Seray Bilgin', 'serayblgn@hotmail.com', '$2y$10$h2.VRwumv6b089LpKe8Z5.tZzA0Z4qZIwqxCjeOujC9kFpWYa3Rne', null, 1, 1, 'U6SLds1uKdQj4utxmWADXqJw8KwVrzTiZa4VoLfsrrMyFhYP4dn080lLNVtb', '2021-05-09 22:34:29', '2021-05-09 22:34:29', null);
INSERT INTO laravel_ecommerce.kullanici (id, adsoyad, email, sifre, aktivasyon_anahtari, aktif_mi, yonetici_mi, remember_token, created_at, updated_at, deleted_at) VALUES (2, 'Mabel Demir', 'mabel@hotmail.com', '$2y$10$u5M3GjbOkcDOIRE6wdfAzOISgzvfUioI4Jafer4s43XLa/IJJpO7u', null, 1, 0, null, '2021-05-09 22:34:29', '2021-05-09 22:34:29', null);
INSERT INTO laravel_ecommerce.kullanici (id, adsoyad, email, sifre, aktivasyon_anahtari, aktif_mi, yonetici_mi, remember_token, created_at, updated_at, deleted_at) VALUES (3, 'Doğukan Barbo', 'dogukan@hotmail.com', '$2y$10$6IOTRT1rmA2cMWs93jeAJeBQ.xpenaw2wQg041IIxZu1.6S0CRaAi', null, 1, 0, null, '2021-05-09 22:34:29', '2021-05-09 22:34:29', null);
INSERT INTO laravel_ecommerce.kullanici (id, adsoyad, email, sifre, aktivasyon_anahtari, aktif_mi, yonetici_mi, remember_token, created_at, updated_at, deleted_at) VALUES (4, 'Güneş Doruk', 'gunes@hotmail.com', '$2y$10$VJ/70/CskaHIhJZ2kL5DVef7HPhXQgZ0w/rVJzq5Q0EXGkQ6LqEE6', null, 1, 0, null, '2021-05-09 22:34:29', '2021-05-09 22:34:29', null);
INSERT INTO laravel_ecommerce.kullanici (id, adsoyad, email, sifre, aktivasyon_anahtari, aktif_mi, yonetici_mi, remember_token, created_at, updated_at, deleted_at) VALUES (5, 'Mercan Filiz', 'mercan@hotmail.com', '$2y$10$7N2EjIuC97PYDPwcMYsCSO4xbrhy8yd.7DZMJ9jQ8E6MLIaozWUZO', null, 1, 0, null, '2021-05-09 22:34:29', '2021-05-09 22:34:29', null);
INSERT INTO laravel_ecommerce.kullanici (id, adsoyad, email, sifre, aktivasyon_anahtari, aktif_mi, yonetici_mi, remember_token, created_at, updated_at, deleted_at) VALUES (6, 'Berker Ünal', 'berker@hotmail.com', '$2y$10$cYOlh.EuNmkOjH8g.b2DDOTjWkFDwyKDnJEhFEqFyqkmg8QfrxtdC', null, 1, 0, null, '2021-05-09 22:34:29', '2021-05-09 22:34:29', null);

create table kullanici_detay
(
    id           int unsigned auto_increment
        primary key,
    kullanici_id int unsigned not null,
    adres        varchar(200) null,
    telefon      varchar(15)  null,
    ceptelefonu  varchar(15)  null,
    constraint kullanici_detay_kullanici_id_foreign
        foreign key (kullanici_id) references kullanici (id)
            on delete cascade
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.kullanici_detay (id, kullanici_id, adres, telefon, ceptelefonu) VALUES (1, 1, 'Kocaeli', '05555555555', '05555555555');
INSERT INTO laravel_ecommerce.kullanici_detay (id, kullanici_id, adres, telefon, ceptelefonu) VALUES (2, 2, 'Bursa', '05555555555', '05555555555');
INSERT INTO laravel_ecommerce.kullanici_detay (id, kullanici_id, adres, telefon, ceptelefonu) VALUES (3, 3, 'İstanbul', '05555555555', '05555555555');
INSERT INTO laravel_ecommerce.kullanici_detay (id, kullanici_id, adres, telefon, ceptelefonu) VALUES (4, 4, 'Yalova', '05555555555', '05555555555');
INSERT INTO laravel_ecommerce.kullanici_detay (id, kullanici_id, adres, telefon, ceptelefonu) VALUES (5, 5, 'İzmir', '05555555555', '05555555555');
INSERT INTO laravel_ecommerce.kullanici_detay (id, kullanici_id, adres, telefon, ceptelefonu) VALUES (6, 6, 'Zonguldak', '05555555555', '05555555555');

create table migrations
(
    id        int unsigned auto_increment
        primary key,
    migration varchar(255) not null,
    batch     int          not null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (7, '2021_05_02_151106_create_kategori_table', 1);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (8, '2021_05_03_103132_create_urun_table', 1);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (9, '2021_05_04_154204_create_kategori_urun_table', 2);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (10, '2021_05_04_191038_create_urun_detay_table', 3);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (11, '2021_05_07_102501_create_kullanici_table', 4);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (13, '2021_05_07_124843_create_kullanici_table', 5);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (14, '2021_05_07_194657_create_sepet_table', 6);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (15, '2021_05_07_195447_create_sepet_urun_table', 7);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (18, '2021_05_08_135959_create_siparis_table', 8);
INSERT INTO laravel_ecommerce.migrations (id, migration, batch) VALUES (19, '2021_05_08_141004_create_kullanici_detay_table', 8);

create table sepet
(
    id           int unsigned auto_increment
        primary key,
    kullanici_id int unsigned not null,
    created_at   timestamp    null,
    updated_at   timestamp    null,
    deleted_at   timestamp    null,
    constraint sepet_kullanici_id_foreign
        foreign key (kullanici_id) references kullanici (id)
            on delete cascade
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.sepet (id, kullanici_id, created_at, updated_at, deleted_at) VALUES (10, 1, '2021-05-10 05:39:56', '2021-05-10 05:39:56', null);
INSERT INTO laravel_ecommerce.sepet (id, kullanici_id, created_at, updated_at, deleted_at) VALUES (11, 1, '2021-05-10 06:40:52', '2021-05-10 06:40:52', null);

create table sepet_urun
(
    id         int unsigned auto_increment
        primary key,
    sepet_id   int unsigned   not null,
    urun_id    int unsigned   not null,
    adet       int            not null,
    fiyati     decimal(10, 2) not null,
    durum      varchar(30)    not null,
    created_at timestamp      null,
    updated_at timestamp      null,
    deleted_at timestamp      null,
    constraint sepet_urun_sepet_id_foreign
        foreign key (sepet_id) references sepet (id)
            on delete cascade,
    constraint sepet_urun_urun_id_foreign
        foreign key (urun_id) references urun (id)
            on delete cascade
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.sepet_urun (id, sepet_id, urun_id, adet, fiyati, durum, created_at, updated_at, deleted_at) VALUES (26, 10, 9, 1, 125.00, 'Beklemede', '2021-05-10 05:40:06', '2021-05-10 05:40:06', null);
INSERT INTO laravel_ecommerce.sepet_urun (id, sepet_id, urun_id, adet, fiyati, durum, created_at, updated_at, deleted_at) VALUES (27, 10, 37, 1, 50.00, 'Beklemede', '2021-05-10 05:53:20', '2021-05-10 05:53:20', null);

create table siparis
(
    id             int unsigned auto_increment
        primary key,
    sepet_id       int unsigned   not null,
    siparis_tutari decimal(10, 4) not null,
    durum          varchar(30)    null,
    adsoyad        varchar(50)    null,
    adres          varchar(200)   null,
    telefon        varchar(15)    null,
    ceptelefonu    varchar(15)    null,
    banka          varchar(20)    null,
    taksit_sayisi  int            null,
    created_at     timestamp      null,
    updated_at     timestamp      null,
    deleted_at     timestamp      null,
    constraint siparis_sepet_id_unique
        unique (sepet_id),
    constraint siparis_sepet_id_foreign
        foreign key (sepet_id) references sepet (id)
            on delete cascade
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.siparis (id, sepet_id, siparis_tutari, durum, adsoyad, adres, telefon, ceptelefonu, banka, taksit_sayisi, created_at, updated_at, deleted_at) VALUES (5, 10, 175.0000, 'Siparişiniz alındı', 'Elif Seray Bilgin', 'Kocaeli', '(055) 555-55-55', '(055) 555-55-55', 'Garanti', 1, '2021-05-10 05:56:26', '2021-05-10 05:56:26', null);

create table urun
(
    id         int unsigned auto_increment
        primary key,
    urun_adi   varchar(150)   not null,
    slug       varchar(160)   not null,
    aciklama   text           not null,
    fiyati     decimal(10, 2) not null,
    created_at timestamp      null,
    updated_at timestamp      null,
    deleted_at timestamp      null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (1, 'Red Rose 1', 'redrose1', 'Red Rose 1', 125.00, '2021-05-05 11:49:43', '2021-05-09 14:09:16', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (2, 'Red Rose 2', 'redrose2', 'Red Rose 2', 50.00, '2021-05-05 11:49:43', '2021-05-09 14:09:53', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (3, 'Red Rose 3', 'redrose3', 'Red Rose 3', 75.00, '2021-05-05 11:49:43', '2021-05-09 19:13:36', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (4, 'Red Rose 4', 'redrose4', 'Red Rose 4', 100.00, '2021-05-05 11:49:43', '2021-05-09 14:10:27', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (5, 'Rose Box 1', 'rosebox1', 'Rose Box 1', 125.00, '2021-05-05 11:49:43', '2021-05-09 14:07:59', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (6, 'Rose Box 2', 'rosebox2', 'Rose Box 2', 50.00, '2021-05-05 11:49:43', '2021-05-09 14:08:48', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (7, 'Rose Box 3', 'rosebox3', 'Rose Box 3', 75.00, '2021-05-05 11:49:43', '2021-05-09 18:44:55', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (8, 'Rose Box 4', 'rosebox4', 'Rose Box 4', 100.00, '2021-05-05 11:49:43', '2021-05-09 19:06:10', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (9, 'Rose Bouquet 1', 'rosebouquet1', 'Rose Bouquet 1', 125.00, '2021-05-05 11:49:43', '2021-05-09 19:05:24', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (10, 'Rose Bouquet 2', 'rosebouquet2', 'Rose Bouquet 2', 125.00, '2021-05-05 11:49:43', '2021-05-09 19:05:06', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (11, 'Infinity Rose 1', 'infinityrose1', 'Infinity Rose 1', 200.00, '2021-05-05 11:49:43', '2021-05-09 19:04:09', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (12, 'Infinity Rose 2', 'infinityrose2', 'Infinity Rose 2', 200.00, '2021-05-05 11:49:43', '2021-05-09 19:03:46', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (13, 'Antoryum 1', 'antoryumrose1', 'Antoryum 1', 50.00, '2021-05-05 11:49:43', '2021-05-09 19:01:59', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (14, 'Antoryum 2', 'antoryumrose2', 'Antoryum 2', 70.00, '2021-05-05 11:49:43', '2021-05-09 19:01:50', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (15, 'Atatürk Çiçeği 1', 'ataturkcicegi1', 'Atatürk Çiçeği 1', 75.00, '2021-05-05 11:49:43', '2021-05-09 19:01:31', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (16, 'Atatürk Çiçeği 2', 'ataturkcicegi2', 'Atatürk Çiçeği 1', 85.00, '2021-05-05 11:49:43', '2021-05-09 19:01:23', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (17, 'Guzmanya 1', 'guzmanya1', 'Guzmanya 1', 70.00, '2021-05-05 11:49:43', '2021-05-09 19:01:03', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (18, 'Guzmanya 2', 'guzmanya2', 'Guzmanya 2', 60.00, '2021-05-05 11:49:43', '2021-05-09 19:00:43', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (19, 'Kalanchoe 1', 'kalanchoe1', 'Kalanchoe 1', 50.00, '2021-05-05 11:49:43', '2021-05-09 19:00:35', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (20, 'Kalanchoe 2', 'kalanchoe2', 'Kalanchoe 2', 70.00, '2021-05-05 11:49:43', '2021-05-09 19:00:07', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (21, 'Mor Orkide 1', 'mororkide1', 'Mor Orkide 1', 150.00, '2021-05-05 11:49:43', '2021-05-09 19:00:00', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (22, 'Mor Orkide 2', 'mororkide2', 'Mor Orkide 2', 130.00, '2021-05-05 11:49:43', '2021-05-09 18:59:46', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (23, 'Beyaz Orkide 1', 'beyazorkide1', 'Beyaz Orkide 1', 125.00, '2021-05-05 11:49:43', '2021-05-09 18:59:21', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (24, 'Beyaz Orkide 2', 'beyazorkide2', 'Beyaz Orkide 2', 150.00, '2021-05-05 11:49:43', '2021-05-09 18:59:11', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (25, 'Mini Orkide 1', 'miniorkide1', 'Mini Orkide 1', 90.00, '2021-05-05 11:49:43', '2021-05-09 18:58:18', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (26, 'Mini Orkide 2', 'miniorkide2', 'Mini Orkide 2', 85.00, '2021-05-05 11:49:43', '2021-05-09 18:58:00', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (27, 'Teraryum 1', 'teraryum1', 'Teraryum 1', 65.00, '2021-05-05 11:49:43', '2021-05-09 18:53:39', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (28, 'Teraryum 2', 'teraryum2', 'Teraryum 2', 50.00, '2021-05-05 11:49:43', '2021-05-09 18:53:13', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (29, 'Teraryum 3', 'teraryum3', 'Teraryum 3', 75.00, '2021-05-05 11:49:43', '2021-05-09 18:52:52', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (30, 'Lilyum & Zambak 1', 'lilyum_zambak1', 'Lilyum & Zambak 1', 65.00, '2021-05-05 11:49:43', '2021-05-09 18:52:15', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (31, 'Lilyum & Zambak 2', 'lilyum_zambak2', 'Lilyum & Zambak 2', 50.00, '2021-05-05 11:49:43', '2021-05-09 18:51:53', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (32, 'Lilyum & Zambak 3', 'lilyum_zambak3', 'Lilyum & Zambak 3', 75.00, '2021-05-05 11:49:43', '2021-05-09 18:51:31', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (33, 'Via Bonte 1', 'viabonte1', 'Via Bonte 1', 65.00, '2021-05-05 11:49:43', '2021-05-09 18:49:48', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (34, 'Via Bonte 2', 'viabonte2', 'Via Bonte 2', 50.00, '2021-05-05 11:49:43', '2021-05-09 18:49:35', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (35, 'Via Bonte 3', 'viabonte3', 'Via Bonte 3', 75.00, '2021-05-05 11:49:43', '2021-05-09 18:49:21', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (36, 'Sukulent 1', 'sukulent1', 'Sukulent 1', 65.00, '2021-05-05 11:49:43', '2021-05-09 18:49:03', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (37, 'Sukulent 2', 'sukulent2', 'Sukulent 2', 50.00, '2021-05-05 11:49:43', '2021-05-09 18:48:31', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (38, 'Sukulent 3', 'sukulent3', 'Sukulent 3', 75.00, '2021-05-05 11:49:43', '2021-05-09 18:48:18', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (39, 'Ferforje 1', 'ferforje1', 'Ferforje 1', 65.00, '2021-05-05 11:49:43', '2021-05-09 18:47:33', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (40, 'Ferforje 2', 'ferforje2', 'Ferforje 2', 50.00, '2021-05-05 11:49:43', '2021-05-09 18:45:24', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (41, 'Ferforje 3', 'ferforje3', 'Ferforje 3', 75.00, '2021-05-05 11:49:43', '2021-05-09 12:14:37', null);
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (42, 'Ferforje 4', 'ferforje-4', 'Ferforje 4', 110.00, '2021-05-09 12:31:29', '2021-05-09 18:55:44', '2021-05-09 18:55:44');
INSERT INTO laravel_ecommerce.urun (id, urun_adi, slug, aciklama, fiyati, created_at, updated_at, deleted_at) VALUES (43, 'Ferforje 5', 'ferforje-5', 'Ferforje 5', 100.00, '2021-05-09 22:40:06', '2021-05-09 22:43:11', '2021-05-09 22:43:11');

create table urun_detay
(
    id                  int unsigned auto_increment
        primary key,
    urun_id             int unsigned         not null,
    goster_slider       tinyint(1) default 0 not null,
    goster_gunu_firsati tinyint(1) default 0 not null,
    goster_one_cikan    tinyint(1) default 0 not null,
    goster_cok_satan    tinyint(1) default 0 not null,
    goster_indirimlisi  tinyint(1) default 0 not null,
    urun_resmi          varchar(50)          null,
    constraint urun_detay_urun_id_unique
        unique (urun_id),
    constraint urun_detay_urun_id_foreign
        foreign key (urun_id) references urun (id)
            on delete cascade
)
    collate = utf8mb4_unicode_ci;

INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (1, 1, 1, 1, 0, 1, 0, '1-1620569356.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (2, 2, 1, 1, 0, 1, 0, '2-1620569393.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (3, 3, 1, 1, 0, 1, 0, '3-1620569411.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (4, 4, 1, 1, 0, 1, 0, '4-1620569427.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (5, 5, 1, 1, 0, 1, 0, '5-1620569279.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (6, 6, 1, 1, 0, 1, 1, '6-1620569328.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (7, 7, 1, 1, 0, 1, 0, '7-1620585895.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (8, 8, 1, 1, 1, 1, 0, '8-1620587171.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (9, 9, 1, 1, 1, 1, 0, '9-1620587124.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (10, 10, 1, 1, 0, 1, 0, '10-1620587106.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (11, 11, 1, 1, 0, 1, 0, '11-1620587049.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (12, 12, 1, 1, 0, 1, 0, '12-1620587026.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (13, 13, 1, 1, 0, 1, 0, '13-1620586919.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (14, 14, 1, 1, 0, 1, 1, '14-1620586910.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (15, 15, 1, 1, 0, 1, 0, '15-1620586891.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (16, 16, 1, 1, 0, 1, 0, '16-1620586883.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (17, 17, 1, 1, 0, 1, 0, '17-1620586863.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (18, 18, 1, 1, 0, 1, 0, '18-1620586843.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (19, 19, 1, 1, 0, 1, 0, '19-1620586835.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (20, 20, 1, 1, 0, 1, 0, '20-1620586818.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (21, 21, 1, 1, 0, 1, 0, '21-1620586800.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (22, 22, 1, 1, 0, 1, 0, '22-1620586786.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (23, 23, 1, 1, 0, 1, 0, '23-1620586761.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (24, 24, 1, 1, 0, 1, 1, '24-1620586751.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (25, 25, 1, 1, 0, 1, 0, '25-1620586698.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (26, 26, 1, 1, 1, 1, 0, '26-1620586680.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (27, 27, 1, 1, 0, 1, 0, '27-1620586419.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (28, 28, 1, 1, 0, 1, 0, '28-1620586393.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (29, 29, 1, 1, 0, 1, 0, '29-1620586372.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (30, 30, 1, 1, 0, 1, 0, '30-1620586335.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (31, 31, 1, 1, 0, 1, 0, '31-1620586313.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (32, 32, 1, 1, 0, 1, 0, '32-1620586291.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (33, 33, 1, 1, 0, 1, 0, '33-1620586226.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (34, 34, 1, 1, 0, 1, 0, '34-1620586175.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (35, 35, 1, 1, 1, 1, 0, '35-1620586161.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (36, 36, 1, 1, 0, 1, 0, '36-1620586143.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (37, 37, 1, 1, 0, 1, 1, '37-1620586121.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (38, 38, 1, 1, 0, 1, 0, '38-1620586098.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (39, 39, 1, 1, 0, 1, 0, '39-1620586053.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (40, 40, 1, 1, 0, 1, 0, '40-1620585937.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (41, 41, 1, 1, 0, 1, 0, '41-1620585916.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (42, 42, 0, 0, 0, 0, 0, '42-1620568377.jpg');
INSERT INTO laravel_ecommerce.urun_detay (id, urun_id, goster_slider, goster_gunu_firsati, goster_one_cikan, goster_cok_satan, goster_indirimlisi, urun_resmi) VALUES (43, 43, 0, 0, 1, 1, 0, null);