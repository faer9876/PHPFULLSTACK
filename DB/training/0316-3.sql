SELECT a.emp_no, a.gender, COUNT(a.emp_no)
FROM employees a
	INNER JOIN(
		SELECT emp_no,to_date
		FROM titles	
		WHERE b.to_date<NOW()
	)
	ON a.emp_no=b.emp_no

GROUP BY a.emp_no
;



-- 조건 1 현재날짜보다 date가 늦은 사람은 제외 그러나 그 마지막 date 뿐만 아니라 그 사람의 전체 date를 제외해야한다...

-- 각 emp_no에서 가장 큰 날짜 구해서 그게 9999이면 제외
SELECT em.gender , COUNT(em.gender)
FROM employees em
	INNER JOIN(
		SELECT emp_no
		FROM titles
		WHERE to_date<=NOW()   -- 현재 날짜보다 예전 날짜 중에서도 가장 큰 
		AND (emp_no,to_date) IN ( -- 날짜만 선택 그리고 emp_no로 묶어서
			SELECT emp_no, MAX(to_date) -- 
			FROM titles
			GROUP BY emp_no
)
)Maxd
ON em.emp_no=Maxd.emp_no
GROUP BY em.gender
;

;

SELECT a.emp_no, a.gender,COUNT(a.gender)
FROM employees a
	INNER JOIN (
		SELECT a.emp_no
		FROM titles
		WHERE b.to_date<NOW()
	)b
	on a.emp_no = b.emp_no
	
GROUP BY a.gender
;


SELECT *
FROM dept_manager
WHERE dept_no = ANY (
						SELECT dept_no 
						FROM dept_manager
						WHERE dept_no = 'd002'
					);

-- - ALL을 사용하면 2개 이상의 결과 모두를 만족하는 데이터를 조회합니다.
SELECT *
FROM dept_manager
WHERE dept_no = ALL (
						SELECT dept_no 
						FROM dept_manager
						WHERE dept_no = 'd002'
					);
					
					
					
					-- 다중열 서브쿼리의 경우
SELECT *
FROM dept_emp
WHERE (emp_no, dept_no) IN  (
								SELECT emp_no, dept_no
								FROM dept_manager
								WHERE to_date >= NOW()
							);
