PGDMP     6    6                x            surat_pg    10.14    10.14 l    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �           1262    16389    surat_pg    DATABASE     �   CREATE DATABASE surat_pg WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE surat_pg;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             Server    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  Server    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16461 
   disposisis    TABLE     �  CREATE TABLE public.disposisis (
    id bigint NOT NULL,
    surat_id bigint NOT NULL,
    tujuan character varying(255) NOT NULL,
    kajian text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    "user" character varying(255) NOT NULL,
    tanggal_kajian date NOT NULL,
    jam_kajian time(0) without time zone NOT NULL,
    disposisi text NOT NULL,
    file_disposisi character varying(255) NOT NULL
);
    DROP TABLE public.disposisis;
       public         postgres    false    3            �            1259    16459    disposisis_id_seq    SEQUENCE     z   CREATE SEQUENCE public.disposisis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.disposisis_id_seq;
       public       postgres    false    3    210            �           0    0    disposisis_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.disposisis_id_seq OWNED BY public.disposisis.id;
            public       postgres    false    209            �            1259    16453 	   expedisis    TABLE     �   CREATE TABLE public.expedisis (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.expedisis;
       public         postgres    false    3            �            1259    16451    expedisis_id_seq    SEQUENCE     y   CREATE SEQUENCE public.expedisis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.expedisis_id_seq;
       public       postgres    false    208    3            �           0    0    expedisis_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.expedisis_id_seq OWNED BY public.expedisis.id;
            public       postgres    false    207            �            1259    16420    failed_jobs    TABLE     �   CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         postgres    false    3            �            1259    16418    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public       postgres    false    202    3            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
            public       postgres    false    201            �            1259    16443    jabatans    TABLE     �   CREATE TABLE public.jabatans (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    jabatan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.jabatans;
       public         postgres    false    3            �            1259    16441    jabatans_id_seq    SEQUENCE     x   CREATE SEQUENCE public.jabatans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.jabatans_id_seq;
       public       postgres    false    206    3            �           0    0    jabatans_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.jabatans_id_seq OWNED BY public.jabatans.id;
            public       postgres    false    205            �            1259    24584    keluars    TABLE     �  CREATE TABLE public.keluars (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    no_surat character varying(255) NOT NULL,
    prihal character varying(255) NOT NULL,
    tujuan character varying(255) NOT NULL,
    keterangan text NOT NULL,
    file character varying(255) NOT NULL,
    deleted_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.keluars;
       public         postgres    false    3            �            1259    24582    keluars_id_seq    SEQUENCE     w   CREATE SEQUENCE public.keluars_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.keluars_id_seq;
       public       postgres    false    3    223            �           0    0    keluars_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.keluars_id_seq OWNED BY public.keluars.id;
            public       postgres    false    222            �            1259    16392 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    3            �            1259    16390    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    197    3            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    196            �            1259    16470    notifications    TABLE     `  CREATE TABLE public.notifications (
    id uuid NOT NULL,
    type character varying(255) NOT NULL,
    notifiable_type character varying(255) NOT NULL,
    notifiable_id bigint NOT NULL,
    data text NOT NULL,
    read_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.notifications;
       public         postgres    false    3            �            1259    16489    opsi_jabatans    TABLE     �   CREATE TABLE public.opsi_jabatans (
    id bigint NOT NULL,
    jabatan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.opsi_jabatans;
       public         postgres    false    3            �            1259    16487    opsi_jabatans_id_seq    SEQUENCE     }   CREATE SEQUENCE public.opsi_jabatans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.opsi_jabatans_id_seq;
       public       postgres    false    3    215            �           0    0    opsi_jabatans_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.opsi_jabatans_id_seq OWNED BY public.opsi_jabatans.id;
            public       postgres    false    214            �            1259    16411    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false    3            �            1259    16516 	   surat_ids    TABLE       CREATE TABLE public.surat_ids (
    id bigint NOT NULL,
    kode_id character varying(255) NOT NULL,
    serial bigint NOT NULL,
    bulan bigint NOT NULL,
    tahun bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.surat_ids;
       public         postgres    false    3            �            1259    16514    surat_ids_id_seq    SEQUENCE     y   CREATE SEQUENCE public.surat_ids_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.surat_ids_id_seq;
       public       postgres    false    3    221            �           0    0    surat_ids_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.surat_ids_id_seq OWNED BY public.surat_ids.id;
            public       postgres    false    220            �            1259    16481 
   suratcodes    TABLE     �   CREATE TABLE public.suratcodes (
    id bigint NOT NULL,
    kode_surat character varying(5) NOT NULL,
    keterangan character varying(32) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.suratcodes;
       public         postgres    false    3            �            1259    16479    suratcodes_id_seq    SEQUENCE     z   CREATE SEQUENCE public.suratcodes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.suratcodes_id_seq;
       public       postgres    false    3    213            �           0    0    suratcodes_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.suratcodes_id_seq OWNED BY public.suratcodes.id;
            public       postgres    false    212            �            1259    16432    surats    TABLE     [  CREATE TABLE public.surats (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    no_surat character varying(255) NOT NULL,
    prihal character varying(255) NOT NULL,
    asal_surat character varying(255) NOT NULL,
    no_asal_surat character varying(255) NOT NULL,
    tanggal_terima_surat date NOT NULL,
    keterangan text NOT NULL,
    file character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone,
    tanggal_surat date NOT NULL,
    tujuan character varying(255) NOT NULL
);
    DROP TABLE public.surats;
       public         postgres    false    3            �            1259    16430    surats_id_seq    SEQUENCE     v   CREATE SEQUENCE public.surats_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.surats_id_seq;
       public       postgres    false    204    3            �           0    0    surats_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.surats_id_seq OWNED BY public.surats.id;
            public       postgres    false    203            �            1259    16505    tujuan_details    TABLE        CREATE TABLE public.tujuan_details (
    id bigint NOT NULL,
    tujuan_id character varying(255) NOT NULL,
    jabatan_tujuan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 "   DROP TABLE public.tujuan_details;
       public         postgres    false    3            �            1259    16503    tujuan_details_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.tujuan_details_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tujuan_details_id_seq;
       public       postgres    false    3    219            �           0    0    tujuan_details_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tujuan_details_id_seq OWNED BY public.tujuan_details.id;
            public       postgres    false    218            �            1259    16497    tujuans    TABLE     �   CREATE TABLE public.tujuans (
    id bigint NOT NULL,
    nama_tujuan character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.tujuans;
       public         postgres    false    3            �            1259    16495    tujuans_id_seq    SEQUENCE     w   CREATE SEQUENCE public.tujuans_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.tujuans_id_seq;
       public       postgres    false    3    217            �           0    0    tujuans_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.tujuans_id_seq OWNED BY public.tujuans.id;
            public       postgres    false    216            �            1259    16400    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    hak_akses character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    no_wa character varying(255) NOT NULL
);
    DROP TABLE public.users;
       public         postgres    false    3            �            1259    16398    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    3    199            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
            public       postgres    false    198            �
           2604    16464    disposisis id    DEFAULT     n   ALTER TABLE ONLY public.disposisis ALTER COLUMN id SET DEFAULT nextval('public.disposisis_id_seq'::regclass);
 <   ALTER TABLE public.disposisis ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    209    210    210            �
           2604    16456    expedisis id    DEFAULT     l   ALTER TABLE ONLY public.expedisis ALTER COLUMN id SET DEFAULT nextval('public.expedisis_id_seq'::regclass);
 ;   ALTER TABLE public.expedisis ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    207    208    208            �
           2604    16423    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    202    201    202            �
           2604    16446    jabatans id    DEFAULT     j   ALTER TABLE ONLY public.jabatans ALTER COLUMN id SET DEFAULT nextval('public.jabatans_id_seq'::regclass);
 :   ALTER TABLE public.jabatans ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    205    206    206            �
           2604    24587 
   keluars id    DEFAULT     h   ALTER TABLE ONLY public.keluars ALTER COLUMN id SET DEFAULT nextval('public.keluars_id_seq'::regclass);
 9   ALTER TABLE public.keluars ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    222    223    223            �
           2604    16395    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    196    197            �
           2604    16492    opsi_jabatans id    DEFAULT     t   ALTER TABLE ONLY public.opsi_jabatans ALTER COLUMN id SET DEFAULT nextval('public.opsi_jabatans_id_seq'::regclass);
 ?   ALTER TABLE public.opsi_jabatans ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    215    214    215            �
           2604    16519    surat_ids id    DEFAULT     l   ALTER TABLE ONLY public.surat_ids ALTER COLUMN id SET DEFAULT nextval('public.surat_ids_id_seq'::regclass);
 ;   ALTER TABLE public.surat_ids ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    220    221    221            �
           2604    16484    suratcodes id    DEFAULT     n   ALTER TABLE ONLY public.suratcodes ALTER COLUMN id SET DEFAULT nextval('public.suratcodes_id_seq'::regclass);
 <   ALTER TABLE public.suratcodes ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    213    212    213            �
           2604    16435 	   surats id    DEFAULT     f   ALTER TABLE ONLY public.surats ALTER COLUMN id SET DEFAULT nextval('public.surats_id_seq'::regclass);
 8   ALTER TABLE public.surats ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    203    204    204            �
           2604    16508    tujuan_details id    DEFAULT     v   ALTER TABLE ONLY public.tujuan_details ALTER COLUMN id SET DEFAULT nextval('public.tujuan_details_id_seq'::regclass);
 @   ALTER TABLE public.tujuan_details ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    219    218    219            �
           2604    16500 
   tujuans id    DEFAULT     h   ALTER TABLE ONLY public.tujuans ALTER COLUMN id SET DEFAULT nextval('public.tujuans_id_seq'::regclass);
 9   ALTER TABLE public.tujuans ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    216    217    217            �
           2604    16403    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    199    198    199            }          0    16461 
   disposisis 
   TABLE DATA               �   COPY public.disposisis (id, surat_id, tujuan, kajian, created_at, updated_at, "user", tanggal_kajian, jam_kajian, disposisi, file_disposisi) FROM stdin;
    public       postgres    false    210   Wz       {          0    16453 	   expedisis 
   TABLE DATA               ?   COPY public.expedisis (id, created_at, updated_at) FROM stdin;
    public       postgres    false    208   |       u          0    16420    failed_jobs 
   TABLE DATA               [   COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
    public       postgres    false    202   4|       y          0    16443    jabatans 
   TABLE DATA               P   COPY public.jabatans (id, user_id, jabatan, created_at, updated_at) FROM stdin;
    public       postgres    false    206   Q|       �          0    24584    keluars 
   TABLE DATA               ~   COPY public.keluars (id, user_id, no_surat, prihal, tujuan, keterangan, file, deleted_at, created_at, updated_at) FROM stdin;
    public       postgres    false    223   b}       p          0    16392 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    197   s~       ~          0    16470    notifications 
   TABLE DATA               x   COPY public.notifications (id, type, notifiable_type, notifiable_id, data, read_at, created_at, updated_at) FROM stdin;
    public       postgres    false    211   �       �          0    16489    opsi_jabatans 
   TABLE DATA               L   COPY public.opsi_jabatans (id, jabatan, created_at, updated_at) FROM stdin;
    public       postgres    false    215   �       s          0    16411    password_resets 
   TABLE DATA               C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    200   ��       �          0    16516 	   surat_ids 
   TABLE DATA               ^   COPY public.surat_ids (id, kode_id, serial, bulan, tahun, created_at, updated_at) FROM stdin;
    public       postgres    false    221   ��       �          0    16481 
   suratcodes 
   TABLE DATA               X   COPY public.suratcodes (id, kode_surat, keterangan, created_at, updated_at) FROM stdin;
    public       postgres    false    213   e�       w          0    16432    surats 
   TABLE DATA               �   COPY public.surats (id, user_id, no_surat, prihal, asal_surat, no_asal_surat, tanggal_terima_surat, keterangan, file, created_at, updated_at, deleted_at, tanggal_surat, tujuan) FROM stdin;
    public       postgres    false    204   ނ       �          0    16505    tujuan_details 
   TABLE DATA               _   COPY public.tujuan_details (id, tujuan_id, jabatan_tujuan, created_at, updated_at) FROM stdin;
    public       postgres    false    219   ��       �          0    16497    tujuans 
   TABLE DATA               J   COPY public.tujuans (id, nama_tujuan, created_at, updated_at) FROM stdin;
    public       postgres    false    217   Έ       r          0    16400    users 
   TABLE DATA               �   COPY public.users (id, name, email, hak_akses, email_verified_at, password, remember_token, created_at, updated_at, no_wa) FROM stdin;
    public       postgres    false    199   R�       �           0    0    disposisis_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.disposisis_id_seq', 5, true);
            public       postgres    false    209            �           0    0    expedisis_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.expedisis_id_seq', 1, false);
            public       postgres    false    207            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
            public       postgres    false    201            �           0    0    jabatans_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.jabatans_id_seq', 44, true);
            public       postgres    false    205            �           0    0    keluars_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.keluars_id_seq', 4, true);
            public       postgres    false    222            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 35, true);
            public       postgres    false    196            �           0    0    opsi_jabatans_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.opsi_jabatans_id_seq', 23, true);
            public       postgres    false    214            �           0    0    surat_ids_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.surat_ids_id_seq', 11, true);
            public       postgres    false    220            �           0    0    suratcodes_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.suratcodes_id_seq', 5, true);
            public       postgres    false    212            �           0    0    surats_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.surats_id_seq', 6, true);
            public       postgres    false    203            �           0    0    tujuan_details_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.tujuan_details_id_seq', 81, true);
            public       postgres    false    218            �           0    0    tujuans_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.tujuans_id_seq', 26, true);
            public       postgres    false    216            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 44, true);
            public       postgres    false    198            �
           2606    16469    disposisis disposisis_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.disposisis
    ADD CONSTRAINT disposisis_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.disposisis DROP CONSTRAINT disposisis_pkey;
       public         postgres    false    210            �
           2606    16458    expedisis expedisis_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.expedisis
    ADD CONSTRAINT expedisis_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.expedisis DROP CONSTRAINT expedisis_pkey;
       public         postgres    false    208            �
           2606    16429    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public         postgres    false    202            �
           2606    16448    jabatans jabatans_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.jabatans
    ADD CONSTRAINT jabatans_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.jabatans DROP CONSTRAINT jabatans_pkey;
       public         postgres    false    206            �
           2606    16450     jabatans jabatans_user_id_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.jabatans
    ADD CONSTRAINT jabatans_user_id_unique UNIQUE (user_id);
 J   ALTER TABLE ONLY public.jabatans DROP CONSTRAINT jabatans_user_id_unique;
       public         postgres    false    206            �
           2606    24592    keluars keluars_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.keluars
    ADD CONSTRAINT keluars_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.keluars DROP CONSTRAINT keluars_pkey;
       public         postgres    false    223            �
           2606    16397    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         postgres    false    197            �
           2606    16478     notifications notifications_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.notifications
    ADD CONSTRAINT notifications_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.notifications DROP CONSTRAINT notifications_pkey;
       public         postgres    false    211            �
           2606    16494     opsi_jabatans opsi_jabatans_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.opsi_jabatans
    ADD CONSTRAINT opsi_jabatans_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.opsi_jabatans DROP CONSTRAINT opsi_jabatans_pkey;
       public         postgres    false    215            �
           2606    16521    surat_ids surat_ids_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.surat_ids
    ADD CONSTRAINT surat_ids_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.surat_ids DROP CONSTRAINT surat_ids_pkey;
       public         postgres    false    221            �
           2606    16486    suratcodes suratcodes_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.suratcodes
    ADD CONSTRAINT suratcodes_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.suratcodes DROP CONSTRAINT suratcodes_pkey;
       public         postgres    false    213            �
           2606    16440    surats surats_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.surats
    ADD CONSTRAINT surats_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.surats DROP CONSTRAINT surats_pkey;
       public         postgres    false    204            �
           2606    16513 "   tujuan_details tujuan_details_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.tujuan_details
    ADD CONSTRAINT tujuan_details_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.tujuan_details DROP CONSTRAINT tujuan_details_pkey;
       public         postgres    false    219            �
           2606    16502    tujuans tujuans_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.tujuans
    ADD CONSTRAINT tujuans_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.tujuans DROP CONSTRAINT tujuans_pkey;
       public         postgres    false    217            �
           2606    16410    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public         postgres    false    199            �
           2606    16408    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         postgres    false    199            �
           1259    16476 1   notifications_notifiable_type_notifiable_id_index    INDEX     �   CREATE INDEX notifications_notifiable_type_notifiable_id_index ON public.notifications USING btree (notifiable_type, notifiable_id);
 E   DROP INDEX public.notifications_notifiable_type_notifiable_id_index;
       public         postgres    false    211    211            �
           1259    16417    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public         postgres    false    200            }   �  x�}��n�@���)�Zp���Q���Vƨ�䛱vc�k�?J�����U.��̞�q� 	�j�n�(HY�"��_�=d�e����u�r�n�i�|SW���r�\Z�epr|��e%pi�Q*�`�A�\$P��벩��ix�F#;<B/�A*�$����4��z��%:�Ҡ�'P�Kp������{�<���ݠa�
�{R��t�Π�v��2�m7����k�ɶn�O �K���7k�yQB�l�_����zRɥ�ɷ��q�A�{<�@�>h��&(��9>;��y�:qna���"����e�`,[0�s�V1�O-��c�Kڻ!<y�鶚M'VbD��t���{<��3��#��k�JN������j�Ђ�ih��WC?��K��wo!��a�e<�_�ч��s�1��a���      {      x������ � �      u      x������ � �      y     x�m�In�0��+��Ho�ɰ���m���p2� �ԩ�Vsa��q�#Gu�C�S�]SҐ[P��4״iN���S�][�P,(c<�xfV|mK
���t���<�GCq��g�����wgu.BP⟔ސ�ݻ��܀2�!|�m��p�m_������5�ըC���>�1�t�����@yYw�B\CXs7���\�����1����g�b!���wp8�q&���ݫ�l~I}Տ��o^_�j��V���y惽      �     x���MN�0���S�n����nBBR�G�] uS��ܟii%*�����7~�؀���6Ų��j�^ޟ��_�9�7h�V6�Y��������+�mJ/�3R����4a�y����h�+V��.�q��$��Z�Ϙ�0Ȍ��[� tnP��G{�8�3`��0w�W�q9B����+������jN�<��;FӥuF�w��a#�2y�!Jz�#׿T׬� �֥�ӄ?��@���&���
���rN�����2      p   t  x�u��r� F���tva��]:�����V3��>~�D�����A��
��Q1�?>��Ǔw��`��0S[�j��cã�.DE�J�P�&�ɶ�k�2�'�0��H�	W�O��llҘ�������G6O�*E+�~��i}�"�ĠH�|��>��H�ܔF�t?���mh��Y�(����C�"���d�7�i�q���k4����$	�.��稭�h�W�fg!��'/+"(�������C���`�t�ּ�� e%� ��(y��e,�͆.Z���u��w*S+��l̹��N9��J�	ֿ��|���i(xe���S�/9�;SoR���J��<�c�=�ʴ�:(oNJ�D���Ɏ���Ȳ�ǍMH      ~      x������ � �      �   r  x�u��j�0�����t��C}��Й,n���`����������ү�(q�x-�<��m'�3�i�1�EZ�=����� fs3�8)9c���G��T�u�ۢ�9�G�����1P���3g��RD6�e&Z�h�~K��Á���IX����q�dl�t�
5��c!k�LK��0Pg�C���3��[޺C��}i�}2�:9958I�M���G~%��[l������F��|»������ܴ��_�O��b�^�5.s���Nk���#h%p�|��gO�00�q�}����oOeU��,�){�~�w�]��3��>`�Z'�+�j&P�Wń�U�뙩v�ڤ��%ʹ��bL~�����|� ����=      s      x������ � �      �   �   x�u��	1EѵT�40A_�2d���L0F��El)=�Ii���y�2v�M�#z��Nf�PG����]����&�PhT��d�qy��&;N�'=?��0��r�rL	t Zո}��L䀔���Q�d��%��n����s��W�V�U��#�j��1��3e�      �   i   x�u�1
�0D�z�����H��-C�49��cH��~x�i�Z6AȘY-�AF�m�`¸�����-*��;������ �۵� 
lw y��`�Q��β,w      w     x��T�n�0=�_1��vٖu�C�a�ZZȅ��TM,Z
��;�bGM��9��y3�q\b�g�tϰM�$_ʻ��Ĳ���|$±��,�w��ҽ�!bC��Ϝ�A꧙�f��&��ꮇ@��{HN�S�mnkV��p�Ճ�����^6W��c]��$F{�B?��=߲s�;k�]?�V`n|�R���b6=RDE��ϵ��Z�.�9��1�$�B���6��BS���.1���/�k�r|כ�M �6IDJ3��4\8�P:���+�n�DnH��詩�ǩ����i���[�Y��f
a90eY�r`j3b���$�-�����bݸ�w��9\Wp�Q&qN���0�}c�����қ!:��Ѽ �19Y���1��D��'�ʹ�d} �- �[�0KD3�b�("��"EH���y�(>�E�A����Kկ֊��M{�js�/=�4gm��t�,\HX�΍[O'��P՝D��u�?@Td�
�<\M��:C���J�Rοd}�jp�����Tn[���������*�̙fm0�|�+Ȫ�+b����۱9qe�	��.y�r�Y����}9�r<�Z'ɧ�d��3�T7���s�����\gf��y�����WxP�����*��B���(�������[��K3��
�ߑ9�D��ydF��y^l�?��H_�CA�"��I��A����LP��l�D��������Ħ�Sb1ͬè<�Ģ�4�V���1�oy���öl�-M/n��b����      �   �  x���M��0��~���пl�<H��d'����(�	\W��n?�"�,Ŧ�u��y|L���g�3o�s�dl���Ac��t���}�XƛL�d�C��4/�?�t2}�X�1���n�.��y�����-g١�Acp=)?�����c���g��L1Ycpê��_�p��5oV9�h����]�Nc�v+㬉���c��>>�4-��u��>hޓ�q�ڠ߮s�@�c�u�a�4�$��C��|=W��Pc2����m��1	�_N�0��s;�$�U�����N?�q6f�E��4+����T�+'��<!�{ƨ�Tȳ��}1b]��_��sd���?�y1Mf�@������!d���
�!�M���c{�����i�W��Eh��0e��������Q��qW�ް�!znK��}961t�h!۞�2�H��ʔJ7��@F���F��z�2����/����T����	4AQ��!�ȏF^��!Y�ז@aq�V��H�\fQ�^�ֆ�!��?j����+C
�r�A����2���O)'��SeH��V���^cH���|B�B���lȩD�YW�4P��H�k�T��I�1*�FeȖԪGr�ē�u�&�ٳ��c��-���^9�r}�5�y^9�xw�_Y�Ɛ��՚z�!�$nWZ�Qi2R�	���>�/��P�\b7�i^�]o��9��r/�_� �o�]�      �   t  x�u�In� E��)|��(�h�j!ǃl�����#�-�*�W��/C ;�v0���!TŹ��`G1�}�� �)���O�2��R[���n��wiВb��:LO?z;�zg8Rj��9Bl(���R��P�A�O�����.�a%ĢV����?'��b�xˑ'TD��Xh�ۍ*�&B:�dꎛ-"��@��e�F7v�s�%�ϫ��>����0�0��L�N����Rt91���0�n'�T�91��}�b���)a]�ݨt���qz*Q�Cb 0�h�۹����J�xk�����@6ڧ}U�P\����7B���h\�ƨ�b �]֡x).c�A���Jtzdc$���\�.��G1���?���      r   �  x���K��H���+\�nf4�W�����᥂��PX������j;�f�7����{�\��j_�ڎ�_;������_O�ke���0(�������� �����̿:��|c��oW��͍L^�uN�����ɬzj3��˰��%{�����,$���C �?@��>�# ������ 9�!�C�|I����_�]Y�*=���%���I��2<Nr�|��M�2����.���X.��^q���w^��
��)x��;����c��`C��2Yq2�䤬�a�R�y�Җ��p�M�M�a�rp����òp���B̋$��0`T���Tv�]{�%����qz�"󤚹�	qI"	Id.�0�o���ͅ�I���g�h��@އ����~��F�!�jwf!�D�F̻�ڦ.e�k4?��c���ת��ϼ�M4��g�J�^[���v�t�m=�rp�ʛ*���sR�O��#��o�w^��H���>�e��MuB��Y�n��((;�����ȟ����<�[���O�J��][e<�+<5�4�ǋa��~�O(�~�t� ���#��a�S�R��}�n����8�-�?�e̠���zYn�b3�Eb�O *da�>���YR}M���E��b�<��#�~�	# ޯ" �PǍ0c:���.�ޒ���{%��+mB.���%ܺ�\r����YXq͹#�4E����q����ra�0�
�L��bVl�ƭ| �y�5�#-���	��-��PS5�"�<O�K���b�����u��Bv3��Z�o��W��������`[�T\���$s`��F��S�]�����b$�~��IѮ请V�8�]
�;/p,�0`a�e�S��_�ӥ�-͙
gJ���!L��eg��j�ܲ�j�nr��'k�<X33�7����3�\&�Lm[�{fm�2\*�~��;�����KJ�����Y����w&h�']����z��
��"�R��������Ŵ%�۬4��C�$��2��/���g�)�s��Nwm��b�.v�Q�z�e���'t'a�Մ��&!����?��C����p��[�ș�0�"s�-�������}��ׇh�5B����7�,�2˓N���3a��yO�28$�ה*α���e'��u�5K!����GE#�"�=�E��E:��z_�Yڍװ�첹�<�"���k�%�X�&�K�9kEj
��s���F�l�pSe���s\��P�@�.�,�n�<A��A���,�|     