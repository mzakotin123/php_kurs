<?php
/*Magische Konstanten ¶

PHP stellt jedem Skript zur Laufzeit eine Vielzahl von vordefinierten Konstanten zur Verfügung. Viele dieser Konstanten
werden jedoch von verschiedenen Erweiterungen definiert, die nur zur Verfügung stehen, wenn diese Erweiterungen selbst
zur Verfügung stehen, d.h. entweder über dynamisches Laden zur Laufzeit oder Einkompilieren.

Es gibt neun magische Konstanten, die, abhängig davon, wo sie eingesetzt werden, einen unterschiedlichen Wert haben.
Zum Beispiel hängt der Wert der Konstanten __LINE__ davon ab, in welcher Zeile ihres Skripts Sie diese Konstante
verwenden. Alle diese "magischen" Konstanten werden während der Kompilierzeit aufgelöst, im Gegensatz zu regulären
Konstanten, die während der Laufzeit aufgelöst werden. Diese besonderen Konstanten sind unabhängig von Groß-/Kleinschreibung
und sind folgende:

Einige "magische" PHP-Konstanten
Name	    Beschreibung
__LINE__	Die aktuelle Zeilennummer einer Datei.
__FILE__	Der vollständige Pfad- und Dateiname einer Datei wobei Symlinks aufgelöst wurden. Wird diese Konstante
            innerhalb einer nachgeladenen Datei verwendet, wird der Name dieser eingebundenen Datei zurückgegeben.
__DIR__	    Der Name des Verzeichnisses, in dem sich die Datei befindet. Wird die Konstante innerhalb eines Includes
            verwendet, wird das Verzeichnis der eingebundenen Datei zurückgegeben. Dies entspricht dem Verhalten von
            dirname(__FILE__). Der Verzeichnisname hat keinen beendenden Schrägstrich, sofern es sich nicht um das
            Rootverzeichnis handelt.
__FUNCTION__	Der Name der Funktion, oder {closure} für anonyme Funktionen.
__CLASS__	Der Name einer Klasse. Der Klassenname enthält auch den Namen des Namespaces in dem er deklariert wurde
            (z.B. Foo\Bar). __CLASS__ kann seit PHP 5.4 auch in Traits verwendet werden, in welchem Fall Name der Klasse
            welche den Trait verwendet zurückgegeben wird.
__TRAIT__	Der Trait Name. Dieser enthält auch den Namespace in welchem der Trait definiert wurde (z.B. Foo\Bar).
__METHOD__	Der Name der Klassenmethode.
__NAMESPACE__	Der Name des aktuellen Namespace.
ClassName::class	Der vollständig qualifizierte Klassenname. Siehe auch ::class.*/