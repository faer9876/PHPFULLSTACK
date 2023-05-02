-- auto_increment
-- 자동 증가 값을 가지는 칼럼, 값을 직접 대입 불가능
-- 중간에 값을 삭제한다고 해서, 삭제된 값을 재사용 하지 않음
-- 레코드가 적재될 때 마다 1씩 증가
-- PK에만 적용 가능

-- 생성
CREATE TABLE test_member(
	mem_no INT(11) PRIMARY KEY
	,mem_name VARCHAR(50)
);

INSERT INTO test_member(mem_name)
VALUES('김영범');
INSERT INTO test_member(mem_name)
VALUES('박상준');
DELETE FROM test_member WHERE mem_no = 2;

TRUNCATE TABLE test_member; -- auto_increment 초기화
-- 테이블 삭제
DROP TABLE test_member;

-- auto_increment 수정
ALTER TABLE test_member MODIFY mem_no INT(11) AUTO_INCREMENT;

-- auto_increment 수 초기화
ALTER TABLE test_member AUTO_INCREMENT=10;

SELECT *
from test_member;


-- Transaction
-- 논리적 기능을 수행하기 위한 작업의 단위 또는 한번에 모두 수행되어야 할 일련의 연산들
-- 특징 : 병행 제어 및 회복 작업 시 처리되는 논리적 단위
-- 하나의 트랙잭션은 commit 되거나 rollback 되어야 함.

-- Transaction 성질
-- 1.원자성(Atumicity)
	-- 트랜잭션 내의 모든 명령은 완벽히 수행되어야 한다.
	-- 전부가 완벽히 수행되지 않으면 전부가 취소되어야 한다.
	
-- 2.일관성(Consistency)
	-- 성공 시 일관성 있는 데이터베이스 상태로 반환
	-- 시스템이 가지고 있는 *고정요소*는 수행 전과 후과 같아야
	
-- 3.독립성(Isolation)
	-- 둘 이상의 트랜잭션이 동시에 병행 실행되는 경우 어느 하나의 트랙잭션 실행중에 다른 트랜잭션은 실 행 불가
	-- 수행중인 트랜잭션은 완전히 완료될 때까지 다른 트랙잭션에서 수행결과 참조 불과
	
-- 4.영속성(Durablility)
	-- 성공적으로 완료된 트랜잭션의 결과는 시스템이 고장나더라도 영구적으로 반영되어야 한다.
	
-- 4.Transaction 상태
	-- 활동 : 실행중인 상태
 	-- 실패 : 트랜잭션이 비정상적으로 종료되어 rollback 연산을 수행 한 상태
	-- 철회 : 트랜잭션이 비정상적으로 종료되어 rollback 연산을 수행한 상태
	-- 부분 완료 : 트랙잭션의 마지막 연산까지 실행하고, commit 연산이 실행되기 전까지의 상태
	-- 완료 : 트랜잭션이 성공적으로 종료되어 commit 연산을 실행한 후의 상태
	

-- 5. Transaction의 연산
	-- commit
		-- 연산의 결과를 DB에 적용
	-- rollback
		-- 연산의 결과를 취소하여, 연산 이전의 DB상태로 되돌아 감.
		
		
		
		
		
-- Index
-- 데이터베이스 테이블에 대한 검색 성능의 속도를 높여주는 기능
-- 인덱스 생성 시 데이터를 오름차순으로 정렬
-- 데이터 오름차순으로 정렬
-- 일반적으로 DB에서 B+Tree 인덱스 방식을 사용

-- Index 종류
-- 클러스터 인덱스 :
	-- PK생성시 자동을 생성되는 인덱스
	-- 테이블당 1개만 존재
-- 보조 인덱스 :
	-- 개발자가 필요에 따로 지정하여 생성하는 인덱스
	-- 복수 설정 기능

-- Index 장점
	-- 테이블을 조회하는 속도와 그에 따른 성능 향상
	-- 전반적인 시스템 부하 감소
	
-- Index 단점
	-- 인덱스를 관리하기 위한 DB 10%에 해다앟는 추가 저장공간 필요
	-- 인덱스 관리 위한 추가 작업 필요
	-- 미흡 시 오히려 성능 감소.
	
-- 사용하기 좋은 상황
	-- 규모가 적지 않은 테이블
	-- insert, update, delete가 자주 발생하기 않는 칼럼
	-- join이나 where 또는 order by에 자주 사용되는 칼럼
	-- 데이터의 중복도가 낮은 칼럼


-- 인덱스 추가 create index 키 네임 on 테이블 명 칼럼 명
CREATE INDEX idx_employees_last_name ON employees(last_name);
SHOW INDEX from employees;

-- 인덱스 제거
DROP INDEX idx_employees_last_name ON employees;

SELECT * FROM employees WHERE last_name='swan'
