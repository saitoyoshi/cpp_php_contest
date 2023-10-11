(defun check-number (n)
  (case (signum n)
    ((1) (format t "p"))
    ((-1) (format t "m"))
    ((0) (format t "z"))
    (otherwise (format t "ho"))))
; (defun c-n-c (n)
;   (case n
;   ((> 0) (format t "se"))
;   ((0) (format t "ze"))
;   ((< 0) (format t "fu"))
;   (otherwise (format t "muko"))))

; (defun ccase n
;   (case n)
;   (> 0) (format t "sei")
;   (< 0) (format t "fu")
;   (= 0) (format t "zero")
;   (otherwise (format t "hoka")))
(defparameter *small* 1)
(defparameter *big* 100)

(defun guess-my-number ()
  (ash (+ *big* *small*) -1))

(defun bigger ()
  (setf *small* (1+ (guess-my-number)))
  (guess-my-number))

(defun smaller ()
  (setf *big* (1- (guess-my-number)))
  (guess-my-number))

; 1つ目のスロットにある値を取り出す
; シングルキュートでエスケープ
; コードモード、データモード
; 他のコンスセル、それ以外のlispデータ
; (defun c-n (n)
;   (case (signum n)
;     (1 (format t "se"))
;     (0 (format t "zee"))
;     (-1 (format t "fu"))
;     (t (format t "mukou"))))
; リストの先頭要素が特別なコマンドになっている
; 最初の要素以外はすべて先頭のコマンドの引数になる
; コンスセル
; 2つの要素をつなげるコンスセルがただただ長く、連なったもの
; 独立した単語
; 規則・意味
; リストで構成
; かっこを使ってリストを構成
; 独立した単語
; 整数と浮動小数点数
; 整数が汚染される。浮動小数点数に合わせられる
; コマンドとして解釈される。このときフォームという構造になっていないといけない。フォームはリストの戦闘の要素が特別なコマンドになっているもの
; コマンド、データ
; リストの前にシングルキュートでエスケープ
; コンスセル
; くっついた2つの箱、箱はそれぞれ、別のものを指せる。
; コンスセル、それ以外のlispデータ
; 2つのものを指せる
; cons　car　cdr
; 2つの要素をつなげるコンスセルがただただながく連なったもの
; 戦闘の要素にある値
; 2番めのスロットの値
; 2つの異なるもの、型はなんでもいい、それらを結びつける

; カッコを使ってリストを作る
; コード、データ、独立した単語
; リストの戦闘の要素が特別なコマンドである
; リストの前にシングルキュートする
; コンスセル
; 他のコンスセル、それ以外のデータ
; cons cdr car
; カッコを使ってコードをリストにする
; 2つのくっついた箱、それぞれが別のものを指せる
; 2番めのスロット
; 異なる2つのものを結びつける
; 1つ目のスロットにあるデータ
; 2つの要素をつなげるコンスセルがただただながく、連なった
; データ、コード
; かっこをつかってコードをリストにする
; (princ "WE ARE")
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

; (defun start-over ()
;   (defparameter *small* 1)
; (defun check-number (n)
;   (cond ((> n 0) (format t "p"))
;         ((< n 0) (format t "m"))
;         (t (format t "z"))))

;   (defparameter *big* 100)
;   (guess-my-number))


; (defun cn (n)
;   (cond ((> n 0) (format t "p"))
;   ((< n 0) (format t "m"))
;   (t (format t "z"))))

; (defun cnn (n)
;   (cond ((> n 0) '(1))
;   ((< n 0) '(-1))
;   (t '(0))))
