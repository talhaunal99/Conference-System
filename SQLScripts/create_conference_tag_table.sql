create table ConferenceTag
(
    ConfID varchar(20) not null,
    Tag    varchar(30) not null,
    primary key (ConfID, Tag),
    constraint ConferenceTag_Conference_ConfID_fk
        foreign key (ConfID) references Conference (ConfID)
            on update cascade on delete cascade
)
    collate = utf8mb4_unicode_ci;

