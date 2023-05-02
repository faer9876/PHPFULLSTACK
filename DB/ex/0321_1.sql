DELIMITER $$
CREATE PROCEDURE test_proc(           -- 함수같은 느낌
	IN in_num INT  
)
BEGIN
	SELECT *
	FROM employees
	LIMIT in_num; 
END $$
DELIMITER ;

CALL test_proc(10);

CALL test_proc(2);


DROP PROCEDURE test_proc;

-- 스토어드 함수
DELIMITER $$
CREATE FUNCTION fc_SUM(num int)
	RETURNS DOUBLE  
BEGIN
	RETURN (num+num+num)/2;
END $$
DELIMITER ;

SELECT fc_sum(3);

DROP FUNCTION fc_sum;



-- 커서 : 행의 집합을 한 행씩 처리 하기위한 방식

DELIMITER $$
CREATE PROCEDURE test()
BEGIN
declare sal INT(4);
DECLARE sum_sal INT(4);
DECLARE cur_sal INT(4);
DECLARE END_row BOOLEAN DEFAULT FALSE;

DECLARE cur_sal CURSOR FOR
	SELECT salary FROM salaries WHERE emp_no=10001;

-- 행 끝나면 end_row에 true대입
DECLARE CONTINUE handler FOR NOT FOUND
	SET end_row = TRUE;
	
-- 커서 오픈
OPEN cur_sal;

	cursor_loop : loop
	
	fetch cur_sal INTO sal;
	
	if end_row then
		leave cursor_loop;
	END if;
	
	SET sum_sal=sum_sal+sal;
END loop cursor_loop;

SELECT sum_sal;
END $$
delimiter ;	

CALL test();

DROP PROCEDURE test;



-- 트리거 특정 이벤트 발생 시 어떠한 이벤트 자동 발생 시켜주는 기능
-- 트리거의 임시 테이블 old new 바뀌기전, 후

DELIMITER $$
CREATE TRIGGER test_update
AFTER UPDATE 
ON departments
FOR EACH ROW 


-- 트리거시 실행되는 코드
BEGIN 
	UPDATE departments
	SET dept_name= 'trigger test'
	WHERE dept_no= 'd010'; 
END $$
DELIMITER ;

UPDATE departments
SET dept_name = 'update test'
WHERE dept_no = 'd010';

CREATE TABLE test_text (
	txt_no INT PRIMARY KEY AUTO_INCREMENT 
	, f_text VARCHAR(4000)
	, FULLTEXT idx_full_test_text_f_text(f_text)
);

INSERT INTO test_text(f_text) 
VALUES('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세');
INSERT INTO test_text(f_text) 
VALUES('무궁화 삼천리 화려강산 대한사람 대한으로 길이 보전하세');
INSERT INTO test_text(f_text) 
VALUES('남산 위에 저 소나무 철갑을 두른듯 바람서리 불변함은 우리기상일세');
INSERT INTO test_text(f_text) 
VALUES('가을 하늘 공활한데 높고 구름 없이 밝은 달은 우리가슴 일편 단심일세');
INSERT INTO test_text(f_text) 
VALUES('이 기상과 이 맘으로 충성을 다하여 괴로우나 즐거우나 나라 사랑하세');

COMMIT;

SELECT *
FROM test_text;

SELECT * 
FROM test_text
WHERE MATCH(f_text) AGAINST('동해물과 백두산이');