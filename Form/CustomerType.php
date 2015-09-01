<?php

namespace Rudak\FactureBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{

	/**
	 * @param FormBuilderInterface $builder
	 * @param array                $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name')
			->add('active')
			->add('address', new AddressType(), array(
				'label' => false
			))
			->add('contact', new ContactType(), array(
				'label' => false
			));
	}

	/**
	 * @param OptionsResolverInterface $resolver
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Rudak\FactureBundle\Entity\Customer'
		));
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'rudak_facturebundle_customer';
	}
}
