create table Country
(
    CountryCode varchar(3)  not null
        primary key,
    CountryName varchar(30) not null
)
    collate = utf8mb4_unicode_ci;

create table CountryCity
(
    CityName    varchar(30) not null,
    CountryCode varchar(3)  not null,
    CityId      int unsigned auto_increment
        primary key,
    constraint countrycity_countrycode_foreign
        foreign key (CountryCode) references Country (CountryCode)
)
    collate = utf8mb4_unicode_ci;

create table Role
(
    Role varchar(8) not null
        primary key
)
    collate = utf8mb4_unicode_ci;

create table failed_jobs
(
    id         bigint unsigned auto_increment
        primary key,
    uuid       varchar(255)                        not null,
    connection text                                not null,
    queue      text                                not null,
    payload    longtext                            not null,
    exception  longtext                            not null,
    failed_at  timestamp default CURRENT_TIMESTAMP not null,
    constraint failed_jobs_uuid_unique
        unique (uuid)
)
    collate = utf8mb4_unicode_ci;

create table files
(
    id         bigint unsigned auto_increment
        primary key,
    name       varchar(255) null,
    file_path  varchar(255) null,
    created_at timestamp    null,
    updated_at timestamp    null
)
    collate = utf8mb4_unicode_ci;

create table migrations
(
    id        int unsigned auto_increment
        primary key,
    migration varchar(255) not null,
    batch     int          not null
)
    collate = utf8mb4_unicode_ci;

create table password_resets
(
    email      varchar(255) not null,
    token      varchar(255) not null,
    created_at timestamp    null
)
    collate = utf8mb4_unicode_ci;

create index password_resets_email_index
    on password_resets (email);

create table personal_access_tokens
(
    id             bigint unsigned auto_increment
        primary key,
    tokenable_type varchar(255)    not null,
    tokenable_id   bigint unsigned not null,
    name           varchar(255)    not null,
    token          varchar(64)     not null,
    abilities      text            null,
    last_used_at   timestamp       null,
    created_at     timestamp       null,
    updated_at     timestamp       null,
    constraint personal_access_tokens_token_unique
        unique (token)
)
    collate = utf8mb4_unicode_ci;

create index personal_access_tokens_tokenable_type_tokenable_id_index
    on personal_access_tokens (tokenable_type, tokenable_id);

create table sessions
(
    id            varchar(255)    not null
        primary key,
    user_id       bigint unsigned null,
    ip_address    varchar(45)     null,
    user_agent    text            null,
    payload       text            not null,
    last_activity int             not null
)
    collate = utf8mb4_unicode_ci;

create index sessions_last_activity_index
    on sessions (last_activity);

create index sessions_user_id_index
    on sessions (user_id);

create table users
(
    id                 bigint unsigned auto_increment
        primary key,
    username           varchar(20)  not null,
    email              varchar(255) not null,
    email_verified_at  timestamp    null,
    password           varchar(255) not null,
    remember_token     varchar(100) null,
    profile_photo_path text         null,
    approved           tinyint(1)   not null,
    role               varchar(255) not null,
    created_at         timestamp    null,
    updated_at         timestamp    null,
    constraint users_email_unique
        unique (email)
)
    collate = utf8mb4_unicode_ci;

create table Conference
(
    ConfID              varchar(20)     not null
        primary key,
    CreationDateTime    datetime        not null,
    Name                varchar(100)    not null,
    ShortName           varchar(19)     not null,
    Year                int             not null,
    StartDate           date            not null,
    EndDate             date            not null,
    Submission_Deadline date            not null,
    WebSite             varchar(100)    not null,
    CreatorUser         bigint unsigned not null,
    approved            tinyint(1)      not null,
    constraint conference_creatoruser_foreign
        foreign key (CreatorUser) references users (id)
)
    collate = utf8mb4_unicode_ci;

create table ConferenceRole
(
    ConfID           varchar(20)     not null,
    Role             varchar(8)      not null,
    AuthenticationID bigint unsigned not null,
    primary key (ConfID, Role, AuthenticationID),
    constraint conferencerole_authenticationid_foreign
        foreign key (AuthenticationID) references users (id)
            on update cascade on delete cascade,
    constraint conferencerole_confid_foreign
        foreign key (ConfID) references Conference (ConfID)
            on update cascade on delete cascade,
    constraint conferencerole_role_foreign
        foreign key (Role) references Role (Role)
)
    collate = utf8mb4_unicode_ci;

create table ConferenceTag
(
    ConfID varchar(20) not null,
    Tag    varchar(30) not null,
    primary key (ConfID, Tag),
    constraint conferencetag_confid_foreign
        foreign key (ConfID) references Conference (ConfID)
            on update cascade on delete cascade
)
    collate = utf8mb4_unicode_ci;

create table Submissions
(
    AuthenticationID   bigint unsigned not null,
    ConfID             varchar(20)     not null,
    submission_id      varchar(255)    not null,
    prev_submission_id varchar(255)    null,
    constraint submissions_authenticationid_foreign
        foreign key (AuthenticationID) references users (id),
    constraint submissions_confid_foreign
        foreign key (ConfID) references Conference (ConfID)
            on update cascade on delete cascade
)
    collate = utf8mb4_unicode_ci;

create table UsersInfo
(
    Salutation       varchar(255)    not null,
    Name             varchar(255)    not null,
    LastName         varchar(255)    not null,
    Affiliation      varchar(255)    not null,
    SecondaryEmail   varchar(255)    not null,
    Phone            varchar(255)    not null,
    Fax              varchar(255)    not null,
    URL              varchar(255)    not null,
    Address          varchar(255)    not null,
    CountryCode      varchar(3)      not null,
    CityId           int unsigned    not null,
    AuthenticationID bigint unsigned not null
        primary key,
    constraint usersinfo_fax_unique
        unique (Fax),
    constraint usersinfo_phone_unique
        unique (Phone),
    constraint usersinfo_secondaryemail_unique
        unique (SecondaryEmail),
    constraint usersinfo_url_unique
        unique (URL),
    constraint usersinfo_authenticationid_foreign
        foreign key (AuthenticationID) references users (id)
            on update cascade on delete cascade,
    constraint usersinfo_cityid_foreign
        foreign key (CityId) references CountryCity (CityId),
    constraint usersinfo_countrycode_foreign
        foreign key (CountryCode) references Country (CountryCode)
)
    collate = utf8mb4_unicode_ci;

create table UsersLog
(
    id               int             not null,
    Salutation       varchar(255)    not null,
    Name             varchar(255)    not null,
    LastName         varchar(255)    not null,
    Affiliation      varchar(255)    not null,
    SecondaryEmail   varchar(255)    not null,
    Phone            varchar(255)    not null,
    Fax              varchar(255)    not null,
    URL              varchar(255)    not null,
    Address          varchar(255)    not null,
    created_at       timestamp       null,
    updated_at       timestamp       null,
    CountryCode      varchar(3)      not null,
    CityId           int unsigned    not null,
    AuthenticationID bigint unsigned not null,
    primary key (id, AuthenticationID),
    constraint userslog_authenticationid_foreign
        foreign key (AuthenticationID) references users (id),
    constraint userslog_cityid_foreign
        foreign key (CityId) references CountryCity (CityId),
    constraint userslog_countrycode_foreign
        foreign key (CountryCode) references Country (CountryCode)
)
    collate = utf8mb4_unicode_ci;