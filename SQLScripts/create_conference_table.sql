create table Conference
(
    ConfID              varchar(20) not null
        primary key,
    CreationDateTime    datetime    not null,
    Name                char(100)   not null,
    ShortName           char(19)    not null,
    Year                int         not null,
    StartDate           date        not null,
    EndDate             date        not null,
    Submission_Deadline date        not null,
    WebSite             char(100)   not null,
    CreatorUser         int         not null
)
    collate = utf8mb4_unicode_ci;

