CREATE TABLE student_info(
	st_no INT(10)
	,brith_date DATE NOT NULL 
	,st_name VARCHAR(50) NOT NULL	
	,st_addr VARCHAR(100) NOT NULL	
	,st_call_no VARCHAR(20) 
	,st_gender ENUM('M','F') NOT NULL 
	,st_ent_date DATE NOT NULL 
	,st_gra_date DATE NOT NULL 
	,st_status ENUM('Y','N')
	,CONSTRAINT student_st_no PRIMARY KEY(st_no)
	);
	
	
DROP TABLE student_info;	
	
INSERT INTO student_info(
	st_no
	,brith_date
	,st_name
	,st_addr
	,st_call_no
	,st_gender
	,st_ent_date
	,st_gra_date
	,st_status
)
VALUES(
	2
	,'1998-04-15'
	,'다나카'
	,'일본 오사카현'
	,null
	,'M'
	,'2018-09-01'
	,'2023-09-01'
	,'Y'
);
COMMIT;

SELECT*
FROM student_info;


CREATE TABLE grade_info(
	st_no INT(10)
	,lec_no INT(10)
	,grade_score VARCHAR(10) DEFAULT('F')
	,grade_rank INT(11) NOT NULL 
	,com_date DATE NOT NULL 
	,CONSTRAINT grad_PK PRIMARY KEY(st_no)
	,CONSTRAINT grad_FK FOREIGN KEY(st_no) REFERENCES student_info(st_no)
	,CONSTRAINT grad_FK2 FOREIGN KEY(lec_no) REFERENCES lecture_info(lec_no)
);

INSERT INTO grade_info(
	st_no
	,lec_no
	,grade_score
	,grade_rank
	,com_date
)
VALUES(
	1
	,1
	,'A+'
	,1
	,'2018-09-01'
);
COMMIT;


CREATE TABLE lecture_info(
	lec_no INT(10) NOT NULL
	,lec_name VARCHAR(30) NOT NULL 
	,lec_qt ENUM('S','SM','F','W')NOT NULL 
	,lec_rm_no VARCHAR(20) NOT NULL 
	,lec_start_time DATETIME NOT NULL
	,lec_ess ENUM('Y','N') NOT NULL 
	,pro_no INT(10)
	,book_no INT(10)
	,CONSTRAINT lec_info_PK PRIMARY KEY(lec_no)
	,CONSTRAINT lec_info_FK FOREIGN KEY(pro_no) REFERENCES professer_info(pro_no)
	,CONSTRAINT lec_info_FK2 FOREIGN KEY(book_no) REFERENCES book_info(book_no)
);

INSERT INTO lecture_info(
	lec_no
	,lec_name
	,lec_qt
	,lec_rm_no
	,lec_start_time
	,lec_ess
	,pro_no
	,book_no
)
VALUES(
	1
	,'math'
	,'S'
	,'A501'
	,'2018-09-12 09:00:00'
	,'Y'
	,1
	,1
);
COMMIT;

CREATE TABLE book_info(
	book_no INT(10)
	,book_name VARCHAR(20) NOT NULL
	,CONSTRAINT book_PK PRIMARY KEY(book_no)
);

INSERT INTO book_info(
	book_no
	,book_name
)
VALUES(
	1
	,'일반물리'
);
COMMIT;


CREATE TABLE professer_info(
	pro_no INT(10)
	,pro_name VARCHAR(30) NOT NULL 
	,brith_date DATE NOT NULL
	,pro_degree_no INT(10) NOT NULL 
	,pro_e_mail VARCHAR(50) NOT NULL 
	,pro_position VARCHAR(30) NOT NULL 
	,pro_lab_no INT(10) NOT NULL 
	,pro_gender ENUM('M','F') NOT NULL
	,pro_ent_date DATE NOT NULL 
	,CONSTRAINT professer_PK PRIMARY KEY(pro_no)
);

INSERT INTO professer_info(
	pro_no
	,pro_name
	,brith_date
	,pro_degree_no
	,pro_e_mail
	,pro_position
	,pro_lab_no
	,pro_gender
	,pro_ent_date
)
VALUES(
	1
	,'Dr,Kim'
	,'1965-04-15'
	,3
	,'faer9876@naver.com'
	,'King'
	,12
	,'M'
	,'2000-05-12'
);
COMMIT;

UPDATE lecture_info SET lec_name ='college calculus';

SELECT* FROM lecture_info;