create table Conference
(
    CreationDateTime    datetime  not null,
    Name                char(100) not null,
    ShortName           char(19)  not null,
    Year                int       not null,
    StartDate           date      not null,
    EndDate             date      not null,
    Submission_Deadline date      not null,
    WebSite             char(100) not null,
    ConfID              varchar(20) as (concat(`ShortName`, '_', `Year`)) stored
        primary key,
    CreatorUser         int       not null
)
    collate = utf8mb4_unicode_ci;

