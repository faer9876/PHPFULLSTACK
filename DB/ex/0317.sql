-- 노란색 pk 묶여 있는거 빨간색 test


CREATE TABLE TEST_TBL (
	MEM_NO INT(5)
	,MEM_NAME VARCHAR(50) NOT NULL  -- 가변형 문자 데이터
	,MEN_AGE INT(3) NOT NULL 
	,MEN_GENDER ENUM('F','M')
	,MEN_SIGNIN_DATE DATETIME NOT NULL 
	,MEN_SINGOUTL_DATE DATETIME
	,CONSTRAINT PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)
);

-- 테이블 변경,추가
ALTER TABLE TEST_TBL ADD COLUMN addr1 VARCHAR(300);


-- 테이블 타입  변경
ALTER TABLE TEST_TBL ALTER COLUMN addr1 VARCHAR(301);

-- 테이블 삭제
ALTER TABLE test_tbl drop COLUMN addr1;

-- 테이블 보기
SHOW FULL COLUMNS FROM test_tbl;

---------------------------------------------------------------


PRIMARY KEY (`title`, `from_date`) USING BTREE,
	UNIQUE INDEX `emp_no` (`emp_no`)

test_1test_1



INSERT INTO titles_2(
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	1
	,'타이틀'
	,'2022-02-02'
	,'2032-02-02'
);
COMMIT; 

SHOW FULL COLUMNS FROM titles_2;


CREATE TABLE dept_emp_2(
	emp_no INT(11)
	,dept_no CHAR(4)
	,from_date date
	,to_date date
	,CONSTRAINT PK_5 PRIMARY KEY(dept_no)
	,FOREIGN KEY(dept_no) REFERENCES departments_2(dept_no)
	,FOREIGN KEY(emp_no) REFERENCES employees_2(emp_no)
);


DROP TABLE dept_emp_2;

INSERT INTO dept_emp_2(
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES (
	1
	,'d01'
	,'2020-12-20'
	,'2021-12-21'
);
COMMIT;



CREATE TABLE dept_manager_2(
	dept_no CHAR(4)
	,emp_no INT(11)
	,from_date DATE
	,to_date date
	,CONSTRAINT PK_6 PRIMARY KEY(dept_no,emp_no)
	,FOREIGN KEY(dept_no) REFERENCES departments_2(dept_no)
	,FOREIGN KEY(emp_no) REFERENCES employees_2(emp_no)
);

ALTER table dept_manager_2 
MODIFY CONSTRAINT FK_6 FOREIGN KEY(dept_no) REFERENCES dept_manager_2(dept_no);

INSERT INTO titles_2(
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	1
	,'manager'
	,'2022-02-02'
	,'2023-02-03'
);
COMMIT;

ROLLBACK;

ALTER TABLE salaries_2 ALTER COLUMN salary INT(4000);

UPDATE salaries_2
SET salary=100000;






