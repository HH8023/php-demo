<?php 
/*
	假递归，用于理解
*/
function a() {
	echo 'a,';
	b();
	echo 'a哈哈';
}
function b() {
	echo 'b,';
	c();
	echo 'b哈哈，';
}
function c() {
	echo 'c,';
	d();
	echo 'c哈哈，'; 
}
function d() {
	echo '我是D';
}
a();//a,b,c,我是Dc哈哈，b哈哈，a哈哈


