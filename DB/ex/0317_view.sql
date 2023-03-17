-- view
-- 가상의 테이블, 보안과 함께 사용자의 편의성 높이기 위해 사용
-- 여러 테이블을 조인 할 때 view 생성
-- 복잡한 sql 편리하게 조회 가능하는 장점 있음.

-- view 생성
-- create [or replace] view 뷰명
-- as
-- select 문
-- [or replace] : 기존의 뷰가 있을 경우 덮어쓰기 합니다.
-- 예를 들어 어떤 테이블에 대한 내용을 보여줘야 할 때 원래는 그 테이블
-- 에 들어가서 전체 내용을 확인 시켜야 하는데 
-- view를 이용하면 특정 부분만 뜯어와서 보여 줄 수 있음

CREATE OR REPLACE VIEW test_view
AS
	SELECT ti.title, COUNT(*) cnt
	from employees emp
		INNER JOIN titles ti
		ON emp.emp_no =ti.emp_no
		WHERE emp.gender='m'
		AND ti.to_date = DATE(99990101)
		GROUP BY ti.title	
;


SELECT * FROM test_view WHERE title='staff';


-- view 삭제
-- doop 뷰 명;
DROP VIEW test_view;

-- 사원의 사원번호, 풀네임, 현재 소속부서명을 출력 view

CREATE OR REPLACE VIEW test_view_2
AS
	SELECT ep.emp_no, CONCAT(first_name,' ',last_name), dp.dept_name
	FROM employees ep
		INNER JOIN dept_emp de
		ON ep.emp_no=de.emp_no
		INNER JOIN departments dp
		ON de.dept_no=dp.dept_no
		WHERE to_date>=NOW()
	;
	
SELECT * FROM test_view_2 employees;