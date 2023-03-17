SELECT  
	emp_no 
FROM 
	salaries
WHERE salary >= 60000
  and salary <= 70000
;


SELECT *
FROM employees
WHERE emp_no BETWEEN 10003 AND 10005
;

SELECT *                    
FROM employees              
WHERE emp_no=10001          
or emp_no=10005             
;                           
                            
SELECT *                    
FROM employees              
WHERE emp_no IN(10002,10005)
;

-- M m_ m으로 시작하고 뒤에 한 글자                    
SELECT *                   
FROM employees              
WHERE first_name LIKE('___m')
;


-- 직급에 engineer가 포함된 사원 사번 직급
SELECT 
	emp_no,title
FROM 
	titles
WHERE title LIKE('%engineer%')
;


SELECT distinct 
	emp_no
FROM dept_emp
;

SELECT *
FROM employees
LIMIT 10 OFFSET 4;

SELECT *
FROM employees
ORDER BY first_name ASC ,last_name asc
;


-- 레코드 개수 세어 주는 함수

SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001; -- 사원번호가 10001인 사람
;


SELECT avg(salary)
FROM salaries 
;

SELECT MAX(salary)
FROM salaries;

SELECT min(salary)
FROM salaries;


SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title)>=100000  --집계함수 조건
;


-- 사원별 급여의 평균 조회
SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no
;

-- 사원별 급여 평균 30000~50000인 사람 조회
SELECT 
	emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no HAVING AVG_s>=30000 
AND AVG_s<=50000
;

SELECT CONCAT(last_name,' ',first_name) AS fullname
FROM employees
;

-- 서브쿼리(SubQuery): 쿼리 안에 또 다른 쿼리가 있는 형태
SELECT *
FROM dept_manager  -- in any all
WHERE emp_no in(
	          		SELECT emp_no 
						FROM dept_manager
	          		WHERE dept_no = 'd009'
                );
                
SELECT *
FROM dept_manager  -- in=any all(모든 조건이 만족 될 때 값 가져옴)
WHERE dept_no in (
	          		SELECT dept_no 
						FROM dept_manager
	          		WHERE emp_no IN(110344, 111035)
                );
                
                
-- 사원별 급여 평균이 70000이상인 사원의 사번, 이름, 성, 성별
SELECT emp_no,first_name,last_name,gender
FROM employees
WHERE emp_no IN (
                   SELECT emp_no
                   FROM salaries
                   GROUP BY emp_no HAVING AVG(salary)>=70000
                   );
                  
-- data 타입 속성 비교
SELECT *
FROM titles
WHERE emp_no IN(10009)
AND to_date>=NOW()
;


-- 현재 직책이 senior engineer인 사원의 사원번호, 성
SELECT emp_no,last_name
FROM employees
WHERE emp_no =ANY (
						SELECT emp_no
						FROM titles
						WHERE to_date>=NOW()
						AND title ='Senior Engineer'
						);
						
						
						
SELECT *
FROM employees
WHERE emp_no=500000 and last_name='KIM'
;