DROP TABLE Trip_info cascade constraint;
DROP TABLE Driver_has_Request cascade constraint;
DROP TABLE Create_trip cascade constraint;
DROP TABLE Request cascade constraint;
DROP TABLE Rating cascade constraint;
DROP TABLE Driver cascade constraint;
DROP TABLE Rider cascade constraint;
DROP TABLE User_info cascade constraint;
DROP TABLE coordinates cascade constraint;


CREATE TABLE User_info (
  User_id INTEGER NOT NULL ,
  name VARCHAR2(20) NOT NULL ,
  email VARCHAR2(20) NOT NULL ,
  pwd VARCHAR2(20) NOT NULL ,
  gender VARCHAR2(20) NOT NULL ,
  contactno INTEGER NOT NULL ,
  cnic VARCHAR2(20) NOT NULL ,
  image VARCHAR2(20) NOT NULL ,
  address VARCHAR2(20) NOT NULL ,
  category VARCHAR2(20) NOT NULL   ,
PRIMARY KEY(User_id));




CREATE TABLE Rider (
  Rider_id INTEGER NOT NULL ,
  User_info_User_id INTEGER NOT NULL ,
  rides_completed INTEGER NOT NULL   ,
PRIMARY KEY(Rider_id)  ,
  FOREIGN KEY(User_info_User_id)
    REFERENCES User_info(User_id));


CREATE INDEX Rider_FKIndex1 ON Rider (User_info_User_id);





CREATE TABLE Request (
  Req_id INTEGER NOT NULL ,
  Rider_id INTEGER NOT NULL ,
  Pickup_loc VARCHAR(20) NOT NULL ,
  go INTEGER NOT NULL   ,
PRIMARY KEY(Req_id, Rider_id),
  FOREIGN KEY(Rider_id)
    REFERENCES Rider(Rider_id));


CREATE INDEX IFK_Rel_04 ON Request (Rider_id);


CREATE TABLE Driver (
  Driver_id INT NOT NULL ,
  User_info_User_id INTEGER NOT NULL ,
  model VARCHAR(20) NOT NULL ,
  carno VARCHAR(20) NOT NULL ,
  licenseno VARCHAR(20) NOT NULL ,
  rides_completed INTEGER NOT NULL   ,
PRIMARY KEY(Driver_id)  ,
  FOREIGN KEY(User_info_User_id)
    REFERENCES User_info(User_id));


CREATE INDEX Driver_FKIndex1 ON Driver (User_info_User_id);




CREATE TABLE Driver_has_Request (
  Driver_id INTEGER NOT NULL ,
  Request_req_id INTEGER NOT NULL ,
  Request_Rider_id INTEGER NOT NULL   ,
PRIMARY KEY(Driver_id, Request_req_id, Request_Rider_id)  ,
  FOREIGN KEY(Driver_id)
    REFERENCES Driver(Driver_id),
  FOREIGN KEY(Request_req_id, Request_Rider_id)
    REFERENCES Request(req_id, Rider_id));


CREATE INDEX Driver_has_Request_FKIndex1 ON Driver_has_Request (Driver_id);


CREATE INDEX IFK_Rel_11 ON Driver_has_Request (Request_req_id, Request_Rider_id);


CREATE TABLE Rating (
  Rate INTEGER NOT NULL ,
  Rider_id INTEGER NOT NULL ,
  Driver_id INTEGER NOT NULL ,
  Feed_back VARCHAR(255)      ,
PRIMARY KEY(Rate),
  FOREIGN KEY(Driver_id)
    REFERENCES Driver(Driver_id),
  FOREIGN KEY(Rider_id)
    REFERENCES Rider(Rider_id));


CREATE INDEX Rating_FKIndex1 ON Rating (Driver_id);
CREATE INDEX Rating_FKIndex2 ON Rating (Rider_id);




CREATE TABLE coordinates (
  longitude VARCHAR2(20) NOT NULL ,
  Driver_id INTEGER NOT NULL ,
  latitude VARCHAR2(20) NOT NULL   ,
  PRIMARY KEY(Driver_id),
  FOREIGN KEY(Driver_id)
    REFERENCES Driver(Driver_id));





CREATE TABLE Create_trip (
  Trip_id INTEGER NOT NULL ,
  Driver_id INTEGER NOT NULL ,
  Tariff INTEGER NOT NULL ,
  Seats INTEGER NOT NULL ,
  end_loc VARCHAR2(20) NOT NULL ,
  start_loc VARCHAR2(20) NOT NULL ,
  offer CHAR(1) NOT NULL,
PRIMARY KEY(Trip_id)  ,
  FOREIGN KEY(Driver_id)
    REFERENCES Driver(Driver_id));


CREATE INDEX Create_trip_FKIndex1 ON Create_trip (Driver_id);



CREATE TABLE Trip_info (
  Driver_id INTEGER NOT NULL ,
  Rider_id INTEGER NOT NULL ,
  Create_trip_Trip_id INTEGER NOT NULL ,
  Trip_date DATE NOT NULL ,
  Start_time DATE NOT NULL ,
  End_time DATE NOT NULL       ,
  FOREIGN KEY(Create_trip_Trip_id)
    REFERENCES Create_trip(Trip_id),
  FOREIGN KEY(Rider_id)
    REFERENCES Rider(Rider_id),
  FOREIGN KEY(Driver_id)
    REFERENCES Driver(Driver_id));


CREATE INDEX Trip_info_FKIndex1 ON Trip_info (Create_trip_Trip_id);
CREATE INDEX Trip_info_FKIndex2 ON Trip_info (Rider_id);
CREATE INDEX Trip_info_FKIndex3 ON Trip_info (Driver_id);





