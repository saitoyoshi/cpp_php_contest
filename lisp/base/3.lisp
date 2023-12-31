(defun test-leap (x)
  (cond ((= (mod x 400) 0) t)
        ((= (mod x 100) 0) nil)
        ((= (mod x 4) 0) t)))
(defun month-list (year)
  (if (test-leap year)
    '(31 29 31 30 31 30
      31 31 30 31 30 31)
    '(31 28 31 30 31 30
      31 31 30 31 30 31)))
(defun days (year month day)
  (+ (apply #'+ (take (- month 1) (month-list year))) day))
(defun take (n xs)
  (if (= n 0)
    nil
    (cons (first xs)
          (take (- n 1) (rest xs)))))
(defun consultant (year month day)
  (cons (* 100.0 (/ (+ (days year month day) -1) (days year 12 31)))
  '(per cent of this year has already passed)))

(defun banker (debt pay rate &optional (sum 0) (year 0) (lim 41))
  (cond ((<= lim year) (list (list 'remainig 'debt debt 'sum sum)))
        ((<= (* debt rate) pay) (cons (cons year debt) (list (list 'last 'installment (* debt rate) 'sum (+ sum (* debt rate))))))
        (t (cons (cons year debt) (banker (- (* debt rate) pay) pay rate (+ sum pay) (+ year 1) lim)))))
; (defun banker-model2 (debt r ps &optional) (sum 0) (year 0))
;   (let ((pay (first ps)))
;     (cond
;       ((null pay) (cons (cons year debt) (list (list 'bunkrupt '- 'remaining 'debt (* debt r) 'sum sum))))
;       ((<= (* debt r) pay) (cons (cons year debt) (list (list 'last 'installment (* debt r) 'sum (+ sum (* debt r))))))
;       (t (cons (cons year debt) (banker-model2 (- (* debt r) pay) r (rest ps) (+ sum pay) (+ year 1))))))

(defun banker-model2 (debt r ps &optional (sum 0) (year 0)) (let ((pay (first ps))) (cond ((null pay) (cons (cons year debt) (list (list 'bunkrupt '- 'remaining 'debt (* debt r) 'sum sum)))) ((<= (* debt r) pay) (cons (cons year debt) (list (list 'last 'installment (* debt r) 'sum (+ sum (* debt r)))))) (t (cons (cons year debt) (banker-model2 (- (* debt r) pay) r (rest ps) (+ sum pay) (+ year 1)))))))
