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
ALTER TABLE TEST_TBL alter COLUMN addr1 VARCHAR(301);

-- 테이블 삭제
ALTER TABLE test_tbl drop COLUMN addr1;

-- 테이블 보기
SHOW FULL COLUMNS FROM test_tbl;

INSERT INTO test_tbl(
	MEM_NO
	,MEM_NAME
	,MEN_AGE
	,MEN_GENDER
	,MEN_SIGNIN_DATE
	,MEN_SINGOUTL_DATE
)
VALUES (
	1
	,'김영범'
	,25
	,'M'
	,NOW()
	,NULL
);
COMMIT; -- 저장


SELECT * FROM test_tbl;

-- delete=dml
DELETE FROM test_tbl
WHERE MEM_NO=2;

ROLLBACK;

-- 테이블 내용 싹다 삭제 복구 불가 tuncate=ddl
TRUNCATE TABLE test_tbl;

-- 테이블자체 삭제
DROP TABLE test_tbl;