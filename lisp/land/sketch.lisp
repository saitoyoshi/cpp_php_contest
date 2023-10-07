(defparameter *small* 1)
(defparameter *big* 100)
(defun guess-my-number ()
  (ash (+ *small* *big*) -1))




























; (defparameter *small* 1)
; (defparameter *big* 100)

; (defun guess-my-number ()
;   (ash (+ *small* *big*) -1))

; (defun smaller ()
;   (setf *big* (1- (guess-my-number)))
;   (guess-my-number))


; (defun bigger ()
;   (setf *small* (1+ (guess-my-number)))
;   (guess-my-number))















; (defun smaller ()
;   (setf *big* (1- (guess-my-number)))
;   (guess-my-number))

; (defun bigger ()
;   (setf *small* (1+ (guess-my-number)))
;   (guess-my-number))

; ライブラリ、自身
; 組み込み機能が豊富、言語自身をいじれる

















; ((setf (*small* 1))
; (setf (*big* 100))
; (defparameter (*small* 1))
; (defparameter (*big* 100))

; (defparameter *small* 1)
; (defparameter *big* 100)

; (defun guess-my-number ()
;   (ash (+ *small* *big*) -1))

; (let ((a 5)
;   (b 6))
;   (+ a b))

; (flet (f (n) (+ n 10)) (f 15))


; ・組み込みの機能が豊富
; ・言語自体をいじれる

; ライブラリ、言語
