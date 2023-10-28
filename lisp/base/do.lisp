(do ((i 0 (+ i 10)) (j 1 (+ j 10))) ((< 50 i) (princ 'a) (princ 'b) (princ 'c) (princ 'd)) (progn (princ i) (princ j) (princ '_)))

; (defun rand (a b)(
;   (let ((-a (- a)))
;     (cond ((= a b) a)
;           ((< b a) (rand b a))
;           (t (+ a (random (+ b -a 1)))))))

(defun rand (a b)
  (let ((-a (- a)))
    (cond ((= a b) a)
          ((< b a) (rand b a))
          ((or (floatp a) (floatp b))
            (+ (float a) (random (+ b -a 1)))))))
; (defun shuffle (xs n)
;   (labels ((shuffle1 (xs)
;     (swap (rand 1 (len xs)) (rand 1 (len xs)) xs)))
;     (if (= n 0) xs (shuffle (shuffle1 xs) (- n 1)))))
(defun shuffle (xs n) (labels ((shuffle 1 (xs) (swap (rand 1 (len xs)) (rand 1 (len xs)) xs))) (if (= n 0) xs (shuffle (shuffle 1 xs) (- n 1)))))
