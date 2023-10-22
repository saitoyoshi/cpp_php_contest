; 関数 を とっ て これ を 与え られ た 値 から 1 まで 積分 する 関数 integral-1

(defun integral-1 (f x) (if (<= x 1) 0 (+ (* 1/ 10 (funcall f x)) (integral-1 f (+ x 1/ 10)))))

(defun integral-1-ver2 (f a)
  (if (<= a 1)
    0
    (+ (* 1/1000 (funcall f a))
      (integral-1-ver2 f (+ a 1/1000)))))
(defun thru (f xs)
  (cond ((null xs)
        nil)
        ((funcall f (first xs))
          (cons (first xs)
                (thru f (rest xs))))
        (t
          (thru f (rest xs)))))

(defun number-satisfy (f xs)
  (length (thru f xs)))

(defun exist (f xs)
  (< 0 (number-satisfy f xs)))

(defun _max (f xs)
  (cond ((null (rest xs))
        (first xs))
        ((funcall
          f (first xs) (_max f (rest xs)))
          (_max f (rest xs)))
          (t
            (first xs))))
; (defun _max (xs)
;   (cond ((null (rest xs))
;         (first xs))
;         ((< (first xs) (_max (rest xs)))
;         (_max (rest xs)))
;         (t
;           (first xs))))
